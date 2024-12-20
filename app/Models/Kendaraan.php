<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kendaraan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kendaraans';
    protected $guarded = [];

    public function tiket()
    {
        return $this->hasMany(Tiket::class, 'kendaraan_id');
    }
}
