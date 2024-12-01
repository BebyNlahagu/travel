<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Segment extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'segments';
    protected $guarded = [];

    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'tiket_id');
    }

    public function terminal()
    {
        return $this->belongsTo(Terminal::class, 'terminal_id');
    }
}
