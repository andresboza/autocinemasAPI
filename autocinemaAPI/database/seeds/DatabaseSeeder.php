<?php

use App\Pelicula;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UbicacionSeeder::class);
        $this->call(ClasificacionSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(TiqueteSeeder::class);
        $this->call(TipoSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(CarteleraSeeder::class);
        $this->call(PeliculaSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(ReservaSeeder::class);
    }
}
