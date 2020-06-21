<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new \App\Categoria();
        $categoria->nombre = "Dulce";
        $categoria->save();

        $categoria = new \App\Categoria();
        $categoria->nombre = "Salado";
        $categoria->save();

        $categoria = new \App\Categoria();
        $categoria->nombre = "Gaseoso";
        $categoria->save();

        $categoria = new \App\Categoria();
        $categoria->nombre = "Natural";
        $categoria->save();

        $categoria = new \App\Categoria();
        $categoria->nombre = "Ácido";
        $categoria->save();

        $categoria = new \App\Categoria();
        $categoria->nombre = "Picante";
        $categoria->save();
    }
}
