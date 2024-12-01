<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fasilitas extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'fasilitas';
    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class,'kelas_fasilitas','kelas_id','fasilitas_id');
    }
}
