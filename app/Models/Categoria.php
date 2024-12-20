<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function peliculas(){
        return $this->hasMany(Pelicula::class);
    }

    public function series(){
        return $this->hasMany(Serie::class);
    }
}
