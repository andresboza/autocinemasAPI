<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function reservas()
    {
        return $this->belongsToMany('App\Reserva');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }

    public function categorias()
    {
        return $this->belongsToMany('App\Categoria');
    }
}
