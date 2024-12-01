<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Terminal extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'terminals';
    protected $guarded = [];

    public function segment()
    {
        return $this->hasMany(Segment::class, 'terminal_id');
    }
}
