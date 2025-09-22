<?php

namespace App\Models\Webmpp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanans';

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id', 'instansi_id', 'status'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = Str::uuid()->toString();
            }
        });
    }

    public function antrians()
    {
        return $this->hasMany(Antrian::class);
    }

    public function namaLayanans()
    {
        return $this->hasMany(NamaLayanan::class);
    }

    public function instansi()
    {
        return $this->belongsTo(Instansi::class, 'instansi_id');
    }
}
