<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public function cartelera()
    {
        return $this->belongsTo('App\Cartelera');
    }

    public function clasificacion()
    {
        return $this->belongsTo('App\Clasificacion');
    }

    public function generos()
    {
        return $this->belongsToMany('App\Genero');
    }
}
