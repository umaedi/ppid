<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Services\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Webmpp\Antrian;

class AntrianController extends Controller
{
    protected $antrianService;

    public function __construct()
    {
        $this->antrianService = new BaseService(new Antrian());
    }

    public function index()
    {
        $antrians = $this->antrianService->getPaginate(10);
        return view('cms.antrian.index', compact('antrians'));
    }

    public function ambilAntrian(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'instansi_id' => 'required|exists:instansis,id',
            'layanan_id' => 'required|exists:layanans,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $nomor_antrian = Antrian::where('instansi_id', $request->instansi_id)
            ->where('layanan_id', $request->layanan_id)
            ->max('nomor') + 1;

        $this->antrianService->store([
            'instansi_id' => $request->instansi_id,
            'layanan_id' => $request->layanan_id,
            'nomor' => $nomor_antrian,
        ]);

        return response()->json(['message' => 'Nomor antrian berhasil diambil', 'nomor_antrian' => $nomor_antrian]);
    }

    public function delete($id)
    {
        $this->antrianService->destroy(null, $id);
        return redirect()->route('cms-antrian')->with('success', 'Antrian berhasil dihapus');
    }
}
