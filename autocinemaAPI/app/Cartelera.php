<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartelera extends Model
{
    public function tiquetes()
    {
        return $this->belongsToMany('App\Tiquete');
    }

    public function reservas()
    {
        return $this->hasMany('App\Reserva');
    }

    public function ubicacion()
    {
        return $this->belongsTo('App\Ubicacion');
    }

    public function peliculas()
    {
        return $this->hasMany('App\Pelicula');
    }
}
