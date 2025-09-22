<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Request;

class Ikm extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'subdomain',
        'jenis_kelamin',
        'alamat',
        'pendidikan',
        'pekerjaan',
        'jenis_layanan',
        'no_hp',
        'saran',
        'pertanyaan_1',
        'pertanyaan_2',
        'pertanyaan_3',
        'pertanyaan_4',
        'pertanyaan_5',
        'pertanyaan_6',
        'pertanyaan_7',
        'pertanyaan_8',
        'pertanyaan_9',

    ];
}
