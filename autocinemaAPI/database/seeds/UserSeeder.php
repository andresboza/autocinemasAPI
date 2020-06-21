<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objetoUsuario = \App\User::create([
            'name' => 'aboza',
            'email' => 'aboza@gmail.com',
            'password' => bcrypt('123456'),
            'rol_id' => 1
        ]);
        $objetoUsuario->save();
        $objetoUsuario = \App\User::create([
            'name' => 'jmontero',
            'email' => 'jmontero@gmail.com',
            'password' => bcrypt('123456'),
            'rol_id' => 1
        ]);
        $objetoUsuario->save();
    }
}
