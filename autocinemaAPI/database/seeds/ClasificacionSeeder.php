<?php

use Illuminate\Database\Seeder;

class ClasificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clasificacion = new \App\Clasificacion();
        $clasificacion->nombre = "TD (Todo público)";
        $clasificacion->save();

        $clasificacion = new \App\Clasificacion();
        $clasificacion->nombre = '12+ (Mayores de 12 años)';
        $clasificacion->save();

        $clasificacion = new \App\Clasificacion();
        $clasificacion->nombre = '15+ (Mayores de 15 años)';
        $clasificacion->save();

        $clasificacion = new \App\Clasificacion();
        $clasificacion->nombre = '18+ (Mayores de 18 años)';
        $clasificacion->save();

        $clasificacion = new \App\Clasificacion();
        $clasificacion->nombre = '19+X (Sólo para adultos)';
        $clasificacion->save();
    }
}
