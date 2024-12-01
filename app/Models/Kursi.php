<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kursi extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kursis';
    protected $guarded = [];

    public function tiket()
    {
        return $this->belongsTo(Tiket::class,'tiket_id');
    }

    public function transaksi()
    {
        return $this->hasMany(TransaksiPass::class, 'kursi_id');
    }
}
