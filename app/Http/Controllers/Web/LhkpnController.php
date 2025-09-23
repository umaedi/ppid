<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LhkpnController extends Controller
{
    public function index(Request $request)
    {
        return view('web.halaman.lhkpn', [
            'title' => 'Laporan Harta Kekayaan Penyelenggara Negara'
        ]);
    }
}
