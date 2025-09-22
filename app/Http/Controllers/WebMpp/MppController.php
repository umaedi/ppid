<?php

namespace App\Http\Controllers\WebMpp;


use App\Http\Controllers\Controller;
use App\Models\Webmpp\MPP;
use Illuminate\Http\Request;
use App\Services\BaseService;


class MppController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public $halaman;
    public function __construct(MPP $halaman)
    {
         $this->halaman = new BaseService($halaman);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            //  data
        }
        return view('webmpp.home.index'); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mpp $mpp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mpp $mpp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mpp $mpp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mpp $mpp)
    {
        //
    }
    
}