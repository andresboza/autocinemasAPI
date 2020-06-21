<?php

use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new \App\Rol();
        $rol->name = "Administrador";
        $rol->description = "Administrador";
        $rol->save();

        $rol = new \App\Rol();
        $rol->name = 'Publicador';
        $rol->description = 'Publicardor';
        $rol->save();

        $rol = new \App\Rol();
        $rol->name = 'Cliente';
        $rol->description = 'Cliente';
        $rol->save();
    }
}
