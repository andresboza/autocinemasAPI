<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiquete extends Model
{
    public function reservas()
    {
        return $this->hasMany('App\Reserva');
    }

    public function carteleras()
    {
        return $this->belongsToMany('App\Cartelera');
    }
}
