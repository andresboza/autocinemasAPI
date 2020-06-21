<?php

use Illuminate\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelicula = new \App\Pelicula();
        $pelicula->nombre = "La Liga de los 5";
        $pelicula->sinopsis = "Esta película sigue la premisa del popular género de superhéroes pero adaptando su historia con elementos tradicionales de latinoamérica.";
        $pelicula->habilitar = true;
        $pelicula->clasificacion_id = 1;
        $pelicula->cartelera_id = 1;
        $pelicula->save();
        $pelicula->generos()->attach([1, 8]);

        $pelicula = new \App\Pelicula();
        $pelicula->nombre = "Free Guy";
        $pelicula->sinopsis = "El cajero de un banco descubre que es un personaje crucial en un videojuego de mundo abierto.";
        $pelicula->habilitar = true;
        $pelicula->clasificacion_id = 2;
        $pelicula->cartelera_id = 2;
        $pelicula->save();
        $pelicula->generos()->attach([2, 3]);

        $pelicula = new \App\Pelicula();
        $pelicula->nombre = "Morbius";
        $pelicula->sinopsis = "El bioquímico Michael Morbius intenta curarse a sí mismo de una rara enfermedad de la sangre.";
        $pelicula->habilitar = true;
        $pelicula->clasificacion_id = 3;
        $pelicula->cartelera_id = 3;
        $pelicula->save();
        $pelicula->generos()->attach([9, 10]);
    }
}
