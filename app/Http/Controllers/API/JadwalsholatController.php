<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JadwalsholatController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if($request->ajax()) {
            $response = Http::get('https://api.myquran.com/v2/sholat/jadwal/1010/' . date('Y/m/d'));
            $data = $response->json();
            return response()->json($data);
        }
    }
}
