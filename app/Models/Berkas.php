<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Berkas extends Model
{
    use HasUuids;

    protected $table = 'berkas';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nama_berkas',
        'berkas',
        'subdomain',
        'tipe_berkas',
        'halaman_id',
    ];

    public function halaman(): BelongsTo {
        return $this->belongsTo(Halaman::class,'halaman_id');
    }
}
