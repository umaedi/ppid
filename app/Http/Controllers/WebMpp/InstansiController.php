<?php

namespace App\Http\Controllers\WebMpp;


use App\Http\Controllers\Controller;
use App\Models\Webmpp\MPP;
use Illuminate\Http\Request;
use App\Services\BaseService;
use App\Services\MppService;

class InstansiController extends Controller
{
    public $instansi;
    public function __construct(MPP $instansi)
    {
        $this->instansi = new BaseService($instansi);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            //  data
        }
        return view('webmpp.instansi.index'); 
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Mpp $instansi)
    {
        //
    }

    public function edit(Mpp $instansi)
    {
        //
    }
}
