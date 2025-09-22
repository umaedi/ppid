<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Request; 

class Saran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'subdomain',
        'ktp',
        'email',
        'no_hp',
        'jenis',
        'pelayanan',
        'komentar',
    ];

    // protected static function booted()
    // {
    //     static::creating(function ($model) {
    //         $model->subdomain = request()->route('subdomain'); // Menyesuaikan dengan bagaimana subdomain tersedia
    //     });
    // }
}
