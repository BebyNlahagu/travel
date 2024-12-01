<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kelas';
    protected $guarded = [];

    public function tiket()
    {
        return $this->belongsTo(Tiket::class,'tiket_id');
    }

    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class,'kelas_fasilitas','kelas_id','fasilitas_id');
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class,'tiket_id');
    }
}
