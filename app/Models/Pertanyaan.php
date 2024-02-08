<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function modul()
    {
        // belongsto
        return $this->belongsTo(Modul::class);
    }

    public function jawaban()
    {
        // belongsto
        return $this->hasMany(Jawaban::class);
    }
}
