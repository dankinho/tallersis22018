<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMascota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascota', function (Blueprint $table) {
            $table->increments('id_mascota');
            $table->integer('cliente_id_cliente')->unsigned();
            $table->date('fecha_nacimiento');
            $table->string('genero',100);
            $table->integer('cat_raza');
            $table->integer('cat_tamano');
            $table->string('url_imagen_mascota',250);
            $table->string('observaciones',250);
            $table->timestamps('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host',100);
            $table->foreign('cliente_id_cliente')->references('cliente_id_cliente')->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascota');
    }
}
