<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('sinopsis');
            $table->boolean('habilitar')->default(false);
            #Asociar con un clasificacion
            $table->unsignedInteger('clasificacion_id');
            $table->foreign('clasificacion_id')->references('id')->on('clasificacions');
            $table->unsignedInteger('cartelera_id');
            $table->foreign('cartelera_id')->references('id')->on('carteleras');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peliculas', function (Blueprint $table) {
            $table->dropForeign('peliculas_clasificacion_id_foreign');
            //Opcional
            $table->dropColumn('clasificacion_id');
        });

        Schema::dropIfExists('peliculas');
    }
}
