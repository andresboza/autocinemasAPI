<?php

use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero = new \App\Genero();
        $genero->nombre = "Comedia";
        $genero->save();

        $genero = new \App\Genero();
        $genero->nombre = 'Terror';
        $genero->save();

        $genero = new \App\Genero();
        $genero->nombre = 'Ciencia Ficción';
        $genero->save();

        $genero = new \App\Genero();
        $genero->nombre = 'Independiente';
        $genero->save();

        $genero = new \App\Genero();
        $genero->nombre = 'Drama';
        $genero->save();

        $genero = new \App\Genero();
        $genero->nombre = 'Bélica';
        $genero->save();

        $genero = new \App\Genero();
        $genero->nombre = 'Musical';
        $genero->save();

        $genero = new \App\Genero();
        $genero->nombre = 'Aventura';
        $genero->save();

        $genero = new \App\Genero();
        $genero->nombre = 'Acción';
        $genero->save();

        $genero = new \App\Genero();
        $genero->nombre = 'Suspenso';
        $genero->save();

        $genero = new \App\Genero();
        $genero->nombre = 'Infantil';
    }
}
