<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_opd',
        'subdomain',
        'photo_kepala_opd',
        'sambutan_kepala_opd',
        'nama_kepala_opd',
        'alamat',
        'no_tlp',
        'email',
        'maps',
        'instagram',
        'youtube', 
        'facebook'
    ];

    public function subdomain()
    {
        return $this->belongsTo(Subdomain::class, 'subdomain', 'nama_subdomain');
    }

}
