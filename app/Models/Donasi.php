<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $fillable = [
        'nama', 'user_id', 'jenis', 'lokasi', 'gambar', 'alasan','st',
    ];
    public function getTakeImageAttribute()
    {
        return "storage/" . $this->gambar;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}