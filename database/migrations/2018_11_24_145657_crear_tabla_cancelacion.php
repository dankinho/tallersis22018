<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCancelacion extends Migration
{
    public function up()
    {
        Schema::create('cancelacion_servicios_mascotas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_servicio_mascota')->unsigned();
            $table->integer('id_estado')->unsigned();
            $table->date('fecha_cancelacion');
            $table->string('justificacion',250);

            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host',100);
            $table->foreign('id_servicio_mascota')->references('id')->on('servicios_mascotas');
            $table->foreign('id_estado')->references('id')->on('estado_opciones');

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); //Nueva línea, para el borrado lógico

        });
    }

    public function down()
    {
        Schema::dropIfExists('cancelacion_servicios_mascotas');
    }
}
