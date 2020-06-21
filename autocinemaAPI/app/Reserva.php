<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tiquete()
    {
        return $this->belongsTo('App\Tiquete');
    }

    public function cartelera()
    {
        return $this->belongsTo('App\Cartelera');
    }

    public function productos()
    {
        return $this->belongsToMany('App\Producto');
    }
}
