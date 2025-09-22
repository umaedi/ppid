<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use App\Models\Subdomain;
use App\Services\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Colors\Rgb\Channels\Red;

class PuskesController extends Controller
{
    public $subdomain;
    public $pengaturan;
    public function __construct(Subdomain $subdomain, Pengaturan $pengaturan)
    {
        $this->subdomain = new BaseService($subdomain);
        $this->pengaturan = new BaseService($pengaturan);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data['table'] = $this->subdomain->query()
                ->whereIn('kategori', ['puskesmas'])
                ->get()
                ->map(function ($item) {
                    $pengaturan = Pengaturan::select('photo_kepala_opd', 'nama_kepala_opd', 'email', 'no_tlp', 'subdomain', 'alamat', 'nama_opd', 'instagram', 'facebook', 'youtube')
                        ->where('subdomain', $item->nama_subdomain)
                        ->first();
                $item->photo_kepala_opd = !empty($pengaturan) && !empty($pengaturan->photo_kepala_opd)
                    ? asset('photo-pimpinan/' . $pengaturan->photo_kepala_opd)
                    : asset('img/logo/foto-kosong.jpg') ;
                $item->nama_kepala_opd = $pengaturan ? $pengaturan->nama_kepala_opd : 'Belum diatur';
                    $item->email = $pengaturan ? $pengaturan->email : 'Belum diatur';
                    $item->no_tlp = $pengaturan ? $pengaturan->no_tlp : 'Belum diatur';
                    $item->subdomain = $pengaturan ? $pengaturan->subdomain : '-';
                    $item->alamat = $pengaturan ? $pengaturan->alamat : 'Belum diatur';
                    $item->nama_opd = $pengaturan ? $pengaturan->nama_opd : 'Belum diatur';
                    $item->instagram = $pengaturan ? $pengaturan->instagram : 'Belum diatur';
                    $item->facebook = $pengaturan ? $pengaturan->facebook : 'Belum diatur';
                    $item->youtube = $pengaturan ? $pengaturan->youtube : 'Belum diatur';
                    return $item;
                });

            return view('web.puskes._data_puskes', $data);
        }

        $data['title'] = "Puskes Tulang Bawang";
        return view('web.puskes.index', $data);
    }


    public function showDetailPuskes($subdomain)
    {
        $pengaturan = Pengaturan::where('subdomain', $subdomain)->first();
        if ($pengaturan) {
            return response()->json($pengaturan);
        }
        return response()->json(['message' => 'Data tidak ditemukan'], 404);
    }
}
