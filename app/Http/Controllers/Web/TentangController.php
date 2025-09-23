<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function profil()
    {
        return view('web.halaman.tentang', [
            'title' => 'Profil Perusahaan'
        ]);
    }
    public function biodataKomisaris()
    {
        return view('web.halaman.komisaris', [
            'title' => 'Biodata Komisaris'
        ]);
    }
    public function biodataDirektur()
    {
        return view('web.halaman.direktur', [
            'title' => 'Biodata Direktur'
        ]);
    }
}
