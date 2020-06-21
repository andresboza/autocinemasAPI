<?php

use Illuminate\Database\Seeder;

class TiqueteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiquete = new \App\Tiquete();
        $tiquete->nombre = "Carro";
        $tiquete->precio = 10000;
        $tiquete->save();

        $tiquete = new \App\Tiquete();
        $tiquete->nombre = "Moto";
        $tiquete->precio = 5000;
        $tiquete->save();

        $tiquete = new \App\Tiquete();
        $tiquete->nombre = "Bicicleta";
        $tiquete->precio = 3000;
        $tiquete->save();
    }
}
