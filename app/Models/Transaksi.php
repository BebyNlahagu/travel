<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'transaksis';
    protected $guarded = [];

    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'tiket_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function promosi()
    {
        return $this->belongsTo(Promosi::class, 'prompsi_id');
    }

    public function transaksi()
    {
        return $this->hasMany(TransaksiPass::class, 'transaksi_id');
    }
}
