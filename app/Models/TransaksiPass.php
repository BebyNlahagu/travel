<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransaksiPass extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'transaksi_passes';
    protected $guarded = [];

    public function kursi()
    {
        return $this->belongsTo(kursi::class, 'kursi_id');
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_id');
    }
}
