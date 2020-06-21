<?php

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new \App\Producto();
        $producto->nombre = "Coca Cola";
        $producto->descripcion = "Coca Cola";
        $producto->precio = 1000;
        $producto->habilitar = true;
        $producto->tipo_id = 1;
        $producto->save();
        $producto->categorias()->attach([1, 3]);

        $producto = new \App\Producto();
        $producto->nombre = "Té Frío";
        $producto->descripcion = "Té Frío";
        $producto->precio = 800;
        $producto->habilitar = true;
        $producto->tipo_id = 1;
        $producto->save();
        $producto->categorias()->attach([1, 4]);

        $producto = new \App\Producto();
        $producto->nombre = "Palomitas Mantequilla";
        $producto->descripcion = "Palomitas con mantequilla";
        $producto->precio = 2500;
        $producto->habilitar = true;
        $producto->tipo_id = 2;
        $producto->save();
        $producto->categorias()->attach([2]);

        $producto = new \App\Producto();
        $producto->nombre = "PalomitasCaramelo ";
        $producto->descripcion = "Palomitas con caramelo";
        $producto->precio = 3000;
        $producto->habilitar = true;
        $producto->tipo_id = 2;
        $producto->save();
        $producto->categorias()->attach([1]);

        $producto = new \App\Producto();
        $producto->nombre = "Palomitas Saladas";
        $producto->descripcion = "Palomitas saladas";
        $producto->precio = 2000;
        $producto->habilitar = true;
        $producto->tipo_id = 2;
        $producto->save();
        $producto->categorias()->attach([2]);

        $producto = new \App\Producto();
        $producto->nombre = "Hot Dog";
        $producto->descripcion = "Hot dog";
        $producto->precio = 2300;
        $producto->habilitar = true;
        $producto->tipo_id = 3;
        $producto->save();
        $producto->categorias()->attach([2, 6]);
    }
}
