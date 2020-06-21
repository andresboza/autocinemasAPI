<?php

use Illuminate\Database\Seeder;

class CarteleraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cartelera = new \App\Cartelera();
        $cartelera->fecha = '2020-09-01';
        $cartelera->hora = '18:00:00';
        $cartelera->visible = true;
        $cartelera->disponible = true;
        $cartelera->cantidadEspacios = 100;
        $cartelera->ubicacion_id = 1;
        $cartelera->save();
        $cartelera->tiquetes()->attach([1, 2, 3]);

        $cartelera = new \App\Cartelera();
        $cartelera->fecha = '2020-09-01';
        $cartelera->hora = '18:00:00';
        $cartelera->visible = true;
        $cartelera->disponible = true;
        $cartelera->cantidadEspacios = 100;
        $cartelera->ubicacion_id = 2;
        $cartelera->save();
        $cartelera->tiquetes()->attach([1, 2, 3]);

        $cartelera = new \App\Cartelera();
        $cartelera->fecha = '2020-09-01';
        $cartelera->hora = '18:00:00';
        $cartelera->visible = true;
        $cartelera->disponible = true;
        $cartelera->cantidadEspacios = 100;
        $cartelera->ubicacion_id = 3;
        $cartelera->save();
        $cartelera->tiquetes()->attach([1, 2]);
    }
}
