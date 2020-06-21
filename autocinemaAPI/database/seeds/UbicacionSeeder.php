<?php

use Illuminate\Database\Seeder;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ubicacion = new \App\Ubicacion();
        $ubicacion->descripcion = "Alajuela";
        $ubicacion->save();

        $ubicacion = new \App\Ubicacion();
        $ubicacion->descripcion = 'Heredia';
        $ubicacion->save();

        $ubicacion = new \App\Ubicacion();
        $ubicacion->descripcion = 'San José';
        $ubicacion->save();
    }
}
