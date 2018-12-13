<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaServicioMascotaComentarios extends Migration
{
    public function up()
    {
        Schema::create('servicio_mascota_comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_servicio_mascota')->unsigned();
            $table->timestamp('fecha_hora');
            $table->string('comentario',300);
            $table->integer('calificacion');

            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host',100);
            $table->foreign('id_usuario')->references('id')->on('clientes');
            $table->foreign('id_servicio_mascota')->references('id')->on('servicios_mascotas');

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); //Nueva línea, para el borrado lógico

        });
    }

    public function down()
    {
        Schema::dropIfExists('servicio_mascota_comentarios');
    }
}
