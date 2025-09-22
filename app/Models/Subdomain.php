<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdomain  extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_subdomain',
        'token',
        'kategori',
        'status'
    ];

    protected $table = 'subdomains';

    public function pengaturan()
    {
        return $this->hasOne(Pengaturan::class, 'subdomain', 'nama_subdomain', 'kategori');
    }
}