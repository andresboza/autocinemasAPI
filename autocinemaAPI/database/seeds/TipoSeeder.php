<?php

use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = new \App\Tipo();
        $tipo->nombre = "Bebida";
        $tipo->save();

        $tipo = new \App\Tipo();
        $tipo->nombre = 'Snack';
        $tipo->save();

        $tipo = new \App\Tipo();
        $tipo->nombre = 'Comida';
        $tipo->save();
    }
}
