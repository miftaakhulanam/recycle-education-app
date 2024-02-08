<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kelas()
    {
        // belongsto
        return $this->belongsTo(Kelas::class);
    }

    public function materi()
    {
        return $this->hasMany(Materi::class);
    }

    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class);
    }
}
