<?php

use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reserva = new \App\Reserva();
        $reserva->totalPagar = 15100;
        $reserva->detalle = "Tiquete de carro con 1 palomitas + 1 coca cola";
        $reserva->iva = 1800;
        $reserva->cartelera_id = 1;
        $reserva->tiquete_id = 1;
        $reserva->user_id = 2;
        $reserva->save();
        $reserva->productos()->attach([1, 1]);
    }
}
