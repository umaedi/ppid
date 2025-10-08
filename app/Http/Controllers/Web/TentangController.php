<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function tentang()
    {
        return view('web.halaman.tentang', [
            'title' => 'Tentang PPID'
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
    public function tugasFungsi()
    {
        return view('web.halaman.tugas_fungsi', [
            'title' => 'Tugas dan Fungsi BUMD'
        ]);
    }
}
