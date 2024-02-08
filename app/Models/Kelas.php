<?php

namespace App\Models;

use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['kategori'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function modul()
    {
        return $this->hasOne(Modul::class);
    }

    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }

    public function pelatihans()
    {
        return $this->hasMany(Pelatihan::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function canAccess()
    {
        return Gate::check('lulus', $this);
    }
}
