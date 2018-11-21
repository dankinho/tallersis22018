<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaServicioMascota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_mascotas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_servicio');
            $table->integer('id_mascota');
            $table->integer('id_estado_servicio');
            $table->integer('cat_id_tipo_servicio');
            $table->timestamp('fecha_servicio_inicio');
            $table->timestamp('fecha_servicio_final');
            $table->decimal('precio_servicio_mascota',5,2);
            $table->decimal('porcentaje_comision',5,2);
            $table->string('url_imagen_servicio_mascota',250);
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host',100);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); //Nueva línea, para el borrado lógico


          //  $table->foreign('id_servicio')->references('id')->on('servicios');
          //  $table->foreign('id_mascota')->references('id')->on('mascotas');
           // $table->foreign('id_estado_servicio')->references('id')->on('estado_servicio_mascotas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios_mascotas');
    }
}
