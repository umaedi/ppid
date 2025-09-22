<?php

namespace App\Http\Controllers\WebMPP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangMppController extends Controller
{
    public function index (Request $request)
    {
        if ($request->ajax()) {
             
        }
        return view('webmpp.tentang-mpp.index');
    }


    public function maklumat (Request $request)
    {
        if ($request->ajax()) {
             
        }
        return view('webmpp.tentang-mpp.maklumat');
    }


    public function tugasdanfungsi (Request $request)
    {
        if ($request->ajax()) {
             
        }
        return view('webmpp.tentang-mpp.tugasdanfungsi');
    }


    public function sejarah (Request $request)
    {
        if ($request->ajax()) {
             
        }
        return view('webmpp.tentang-mpp.sejarah');
    }


    public function visimisi (Request $request)
    {
        if ($request->ajax()) {
             
        }
        return view('webmpp.tentang-mpp.visimisi');
    }


    public function selendangpandang (Request $request)
    {
        if ($request->ajax()) {
             
        }
        return view('webmpp.tentang-mpp.selendangpandang');
    }


    public function moto (Request $request)
    {
        if ($request->ajax()) {
             
        }
        return view('webmpp.tentang-mpp.moto');
    }

    public function programkerja (Request $request)
    {
        if ($request->ajax()) {
             
        }
        return view('webmpp.tentang-mpp.programkerja');
    }
}


