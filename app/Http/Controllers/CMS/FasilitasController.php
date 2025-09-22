<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Services\BaseService;
use App\Models\Webmpp\Fasilitas;

class FasilitasController extends Controller
{
    protected $fasilitas;

    public function __construct(Fasilitas $fasilitas)
    {
        $this->fasilitas = new BaseService($fasilitas);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data['fasilitas'] = $this->fasilitas->getPaginate(10);
            return view('cms.fasilitas._data_table', $data);
        }
        
        $data['title'] = "List Fasilitas";
        return view('cms.fasilitas.index', $data);
    }

    public function create()
    {
        $data['title'] = "Buat Fasilitas Baru";
        return view('cms.fasilitas.create', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_fasilitas' => 'required|string|max:255',
            'deskripsi_fasilitas' => 'required|string|max:500',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validasi gagal', 'errors' => $validator->errors()], 422);
        }

        $data = $validator->validated();
        $data['id'] = Str::uuid();

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $filename = Str::uuid() . '.' . $logo->getClientOriginalExtension();
            $path = 'mpp/fasilitas/' . $filename;
            Storage::disk('s3')->put($path, file_get_contents($logo));
            $data['logo'] = $filename;
        }

        try {
            $this->fasilitas->store($data);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Terjadi kesalahan', 'error' => $th->getMessage()], 500);
        }

        return response()->json(['message' => 'Fasilitas berhasil ditambahkan'], 200);
    }

    public function edit(Request $request)
    {
        $data['title'] = "Update Fasilitas";
        $data['fasilitas'] = $this->fasilitas->Query()->where('id', $request->id)->first();
        return view('cms.fasilitas.edit', $data);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->only(['judul_fasilitas', 'deskripsi_fasilitas', 'status', 'logo']), [
            'judul_fasilitas' => 'nullable|string|max:255',
            'deskripsi_fasilitas' => 'nullable|string|max:500',
            'status' => 'nullable|in:aktif,nonaktif',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validasi gagal', 'errors' => $validator->errors()], 422);
        }

        $fasilitas = $this->fasilitas->Query()->where('id', (string) $request->id)->first();
        if (!$fasilitas) {
            return response()->json(['message' => 'Fasilitas tidak ditemukan'], 404);
        }

        $data = array_filter($validator->validated(), fn($value) => !is_null($value));

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $filename = Str::uuid() . '.' . $logo->getClientOriginalExtension();
            $path = 'mpp/fasilitas/' . $filename;
            Storage::disk('s3')->put($path, file_get_contents($logo));
            if (!empty($fasilitas->logo)) {
                Storage::disk('s3')->delete('mpp/fasilitas/' . $fasilitas->logo);
            }
            $data['logo'] = $filename;
        }

        try {
            $fasilitas->update($data);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Terjadi kesalahan', 'error' => $th->getMessage()], 500);
        }

        return response()->json(['message' => 'Fasilitas berhasil diperbarui'], 200);
    }

    public function delete(Request $request)
    {
        $fasilitas = $this->fasilitas->find($request->id);
        if (!$fasilitas) {
            return response()->json(['message' => 'Fasilitas tidak ditemukan'], 404);
        }

        if ($fasilitas->logo) {
            Storage::disk('s3')->delete('mpp/fasilitas/' . $fasilitas->logo);
        }

        try {
            $fasilitas->delete();
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Terjadi kesalahan', 'error' => $th->getMessage()], 500);
        }

        return response()->json(['message' => 'Fasilitas berhasil dihapus'], 200);
    }
}
