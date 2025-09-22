<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Services\BaseService;
use App\Models\Webmpp\Instansi;

class InstansiController extends Controller
{
    protected $instansi;

    public function __construct(Instansi $instansi)
    {
        $this->instansi = new BaseService($instansi);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data['instansis'] = $this->instansi->getPaginate(10);
            return view('cms.instansi._data_table', $data);
        }
        
        $data['title'] = "List Instansi";
        return view('cms.instansi.index', $data);
    }



    public function create()
    {
        $data['title'] = "Buat Instansi Baru";
        return view('cms.instansi.create', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'      => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'status'    => 'required|in:aktif,nonaktif',
            'logo'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors());
        }

        $data = $validator->validated();

        $existingInstansi = $this->instansi->Query()->where('nama', $data['nama'])->first();
        if ($existingInstansi) {
            return response()->json([
                'message' => 'Validasi gagal',
                'errors' => ['nama' => ['Instansi dengan nama tersebut sudah ada.']]
            ], 422);
        }
        
        $data['id'] = Str::uuid();

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $uniqueFileName = Str::uuid() . '.' . $logo->getClientOriginalExtension();
            $path = 'mpp/instansi/' . $uniqueFileName;
            Storage::disk('s3')->put($path, file_get_contents($logo));
            $data['logo'] = $uniqueFileName;
        }

        try {
            $this->instansi->store($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success("Instansi berhasil ditambahkan", "Instansi berhasil ditambahkan!");
    }

    public function edit(Request $request)
    {
        $data['title'] = "Update Instansi";
        $data['instansi'] = $this->instansi->Query()->where('id', $request->id)->first();
        return view('cms.instansi.edit', $data);
    }

    public function update(Request $request)
    {

        $validator = Validator::make($request->only(['nama', 'kabupaten', 'status', 'logo']), [
            'nama'      => 'nullable|string|max:255',
            'kabupaten' => 'nullable|string|max:255',
            'status'    => 'nullable|in:aktif,nonaktif',
            'logo'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        if ($validator->fails()) {
            return $this->error($validator->errors());
        }
    
        $instansi = $this->instansi->Query()->where('id', (string) $request->id)->first();

        if (!$instansi) {
            return response()->json([
                'success' => false,
                'message' => "Instansi dengan ID $request->id tidak ditemukan!",
            ], 404);
        }
        
        $data = array_filter($validator->validated(), function ($value) {
            return !is_null($value);
        });
    
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $uniqueFileName = Str::uuid() . '.' . $logo->getClientOriginalExtension();
            $path = 'mpp/instansi/' . $uniqueFileName;
    
            // Simpan ke S3
            Storage::disk('s3')->put($path, file_get_contents($logo));
    
            // Hapus logo lama jika ada
            if (!empty($instansi->logo)) {
                Storage::disk('s3')->delete('mpp/instansi/' . $instansi->logo);
            }
    
            $data['logo'] = $uniqueFileName;
        }
    
        try {
            // Update hanya field yang dikirim
            $instansi->update($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
    
        return $this->success("Instansi berhasil diperbarui", "Instansi berhasil diperbarui!");
    }
    

    public function delete(Request $request)
    {
        $instansi = $this->instansi->find($request->id);
        if (!$instansi) {
            return $this->error("Instansi tidak ditemukan!");
        }

        if ($instansi->logo) {
            Storage::disk('s3')->delete($instansi->logo);
        }

        try {
            $instansi->delete();
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success("Instansi berhasil dihapus", "Instansi berhasil dihapus!");
    }
}