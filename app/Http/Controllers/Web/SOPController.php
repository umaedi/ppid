<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SOPController extends Controller
{
    public function index() {
        return view('web.sop.index', [
            'title' => 'SOP Pelayanan Informasi Publik'
        ]);
    }

    public function sopKeberatan()
    {
        return view('web.sop.keberatan', [
            'title' => 'SOP PENANGANAN KEBERATAN INFORMASI PUBLIK'
        ]);
    }

    public function sopPenetapan()
    {
        return view('web.sop.penetapan', [
            'title' => 'SOP PENETAPAN DAN PEMUTAKHIRAN DAFTAR INFORMASI PUBLIK'
        ]);
    }
}
