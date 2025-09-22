<?php

namespace App\Http\Controllers\WebMpp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            //  data
        }
        return view('webmpp.antrian.index'); 
    }
}
