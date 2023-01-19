<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adopsi extends Model
{
    protected $fillable = [
        'donasi_id', 'user_id', 'lokasi', 'alasan',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function donasi()
    {
        return $this->belongsTo(Donasi::class);
    }
}
