<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promosi extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'promosis';
    protected $guarded = [];

    public function transaksi()
    {
        return $this->hasMany(transaksi::class, 'promosi_id');
    }
}
