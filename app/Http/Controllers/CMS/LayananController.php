<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Services\BaseService;
use App\Models\Webmpp\Layanan;
use App\Models\Webmpp\Instansi;

class LayananController extends Controller
{
    protected $layanan;

    public function __construct(Layanan $layanan)
    {
        $this->layanan = new BaseService($layanan);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data['layanans'] = $this->layanan->getPaginate(10);
            return view('cms.layanan._data_table', $data);
        }
    
        $data['title'] = "Daftar Layanan";
        return view('cms.layanan.index', $data);
    }
    

    public function create()
    {
        $data['title'] = "Tambah Layanan Baru";
        $data['instansis'] = Instansi::all();
        return view('cms.layanan.create', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'instansi_id' => 'required|exists:instansis,id',
            'status'      => 'required|in:aktif,nonaktif',
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors());
        }

        $data = $validator->validated();
        $existingLayanan = $this->layanan->Query()->where('instansi_id', $data['instansi_id'])->first();
        if ($existingLayanan) {
            return response()->json([
                'message' => 'Validasi gagal',
                'errors' => ['instansi_id' => ['Layanan untuk instansi ini sudah ada.']]
            ], 422);
        }
        
        $data['id'] = Str::uuid();

        try {
            $this->layanan->store($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success("Layanan berhasil ditambahkanke", "Layanan berhasil ditambahkan!");
    }

    public function edit(Request $request)
    {
        $data['title'] = "Edit Layanan";
        $data['layanan'] = $this->layanan->Query()->where('id', $request->id)->first();
        $data['instansis'] = Instansi::all();

        if (!$data['layanan']) {
            return response()->json(['success' => false, 'message' => 'Layanan tidak ditemukan!'], 404);
        }

        return view('cms.layanan.edit', $data);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->only(['instansi_id', 'status']), [
            'instansi_id' => 'nullable|exists:instansis,id',
            'status'      => 'nullable|in:aktif,nonaktif',
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors());
        }

        $layanan = $this->layanan->Query()->where('id', (string) $request->id)->first();

        if (!$layanan) {
            return response()->json(['success' => false, 'message' => "Layanan dengan ID $request->id tidak ditemukan!"], 404);
        }

        $data = array_filter($validator->validated(), function ($value) {
            return !is_null($value);
        });

        try {
            $layanan->update($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success("Layanan berhasil diperbarui", "Layanan berhasil diperbarui!");
    }

    public function delete(Request $request)
    {
        $layanan = $this->layanan->find($request->id);
        if (!$layanan) {
            return $this->error("Layanan tidak ditemukan!");
        }

        try {
            $layanan->delete();
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success("Layanan berhasil dihapus", "Layanan berhasil dihapus!");
    }
}