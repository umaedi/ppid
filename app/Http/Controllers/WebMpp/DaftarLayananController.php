<?php

namespace App\Http\Controllers\WebMPP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarLayananController extends Controller
{
    public function index (Request $request)
    {
        if ($request->ajax()) {
             
        }
        return view('webmpp.daftar-layanan.index');
    }
}
