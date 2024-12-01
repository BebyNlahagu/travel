<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tiket extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tikets';
    protected $guarded = [];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class,'kendaraan_id');
    }

    public function segment()
    {
        return $this->hasMany(Segment::class,'tiket_id');
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class,'tiket_id');
    }

    public function kursi()
    {
        return $this->hasMany(Kursi::class,'tiket_id');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class,'tiket_id');
    }
}
