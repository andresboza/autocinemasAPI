<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->double('totalPagar');
            $table->text('detalle');
            $table->float('iva');
            $table->unsignedInteger('cartelera_id');
            $table->unsignedInteger('tiquete_id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cartelera_id')->references('id')->on('carteleras');
            $table->foreign('tiquete_id')->references('id')->on('tiquetes');
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
        Schema::table('reservas', function (Blueprint $table) {
            $table->dropForeign('reservas_cartelera_id_foreign');
            $table->dropForeign('reservas_tiquete_id_foreign');
            $table->dropForeign('reservas_producto_id_foreign');
            $table->dropForeign('reservas_user_id_foreign');
        });
        Schema::dropIfExists('reservas');
    }
}
