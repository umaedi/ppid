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
}
