<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\BaseService;
use App\Models\Webmpp\Layanan;
use App\Models\Webmpp\NamaLayanan;
use App\Models\Webmpp\Instansi;

class LayananDetailsController extends Controller
{
    protected $namaLayananService;
    protected $layananService;
    protected $instansi;

    public function __construct(NamaLayanan $namaLayanan, Layanan $layanan, Instansi $instansi)
    {
        $this->namaLayananService = new BaseService($namaLayanan);
        $this->layananService = new BaseService($layanan);
        $this->instansi = new BaseService($instansi);  
    }
    
    public function index(Request $request, $subdomain, $instansi_id)
    {
        if ($request->ajax()) {
            $data['namaLayanan'] = $this->namaLayananService->query()
                ->whereHas('layanan', function ($query) use ($instansi_id) {
                    $query->where('instansi_id', $instansi_id);
                })
                ->select('id', 'nama', 'status')
                ->paginate(10);

            return view('cms.layanan-details._data_table', $data);
        }

        return view('cms.layanan-details.index', [
            'title' => "List Nama Layanan",
            'instansi_id' => $instansi_id
        ]);
    }

    public function create(Request $request, $subdomain, $instansi_id)
    {
        if (!$instansi_id) {
            abort(404, "Instansi tidak ditemukan");
        }

        $instansi = Instansi::find($instansi_id);
        if (!$instansi) {
            abort(404, "Instansi tidak ditemukan di database");
        }

        $layanans = Layanan::where('instansi_id', $instansi_id)->get();
        $layanan = $layanans->first(); // Ambil layanan pertama jika ada

        $namaLayanan = NamaLayanan::whereHas('layanan', function ($query) use ($instansi_id) {
            $query->where('instansi_id', $instansi_id);
        })->first();

        return view('cms.layanan-details.create', [
            'title' => "Buat Nama Layanan Baru",
            'layanans' => $layanans,
            'namaLayanan' => $namaLayanan ?? new NamaLayanan(),
            'instansi' => $instansi,
            'layanan_id' => $layanan?->id,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'layanan_id' => ['required', 'exists:layanans,id'],
            'nama'       => ['required', 'string', 'max:255'],
            'status'     => ['required', 'in:aktif,nonaktif'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = $validator->validated();


        $existingLayanan = $this->namaLayananService->Query()
            ->where('nama', $data['nama'])
            ->first();
    
        if ($existingLayanan) {
            return response()->json([
                'message' => 'Validasi gagal',
                'errors' => ['nama' => ['Nama Instansi sudah ada.']]
            ], 422);
        }
    
        

        try {
            $namaLayanan = NamaLayanan::create($validator->validated());
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }

        return response()->json([
            'message' => 'Data berhasil diperbarui',
            'redirect_url' => url('/cms/layanan-details/data-show/' . $namaLayanan->layanan->instansi_id)
        ]);
    }

    public function edit(Request $request, $subdomain, $id)
    {
        $namaLayanan = $this->namaLayananService->query()->with('layanan')->find($id);

        if (!$namaLayanan) {
            return response()->json(['message' => 'Nama Layanan tidak ditemukan'], 404);
        }

        return view('cms.layanan-details.edit', [
            'title' => "Edit Nama Layanan",
            'namaLayanan' => $namaLayanan,
            'instansi_id' => $namaLayanan->layanan->instansi_id ?? null,
            'subdomain' => $subdomain
        ]);
    }

    public function update(Request $request, $subdomain, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama'   => 'required|string|max:255',
            'status' => 'required|in:aktif,nonaktif',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        $namaLayanan = $this->namaLayananService->query()->with('layanan')->find($id);
        if (!$namaLayanan) {
            return response()->json(['message' => 'Nama Layanan tidak ditemukan'], 404);
        }
    
        try {
            $namaLayanan->update($validator->validated());
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    
        return response()->json([
            'message' => 'Data berhasil diperbarui',
            'redirect_url' => url('/cms/layanan-details/data-show/' . $namaLayanan->layanan->instansi_id)
        ]);
    }
    

    public function delete(Request $request, $subdomain, $id)
    {
        $namaLayanan = $this->namaLayananService->query()->find($id);
        if (!$namaLayanan) {
            return response()->json(['message' => 'Nama Layanan tidak ditemukan'], 404);
        }

        try {
            $namaLayanan->delete();
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }

        return response()->json(['message' => 'Nama Layanan berhasil dihapus']);
    }
}
