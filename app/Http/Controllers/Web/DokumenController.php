<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function index(Request $request)
    {
        return view('web.dokumen.index', [
            'title' => 'Dokumen'
        ]);
    }
}
