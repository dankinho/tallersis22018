<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaServicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio', function (Blueprint $table) {
            $table->increments('id_servicio');
            $table->integer('id_comision')->unsigned();
            $table->integer('id_datos_servicio')->unsigned();
            $table->integer('cat_id_tipo_servicio');
            $table->integer('cat_id_estado_servicio');
            $table->string('titulo',100);
            $table->string('descripcion',250);
            $table->decimal('precio_paseo',5,2);
            $table->decimal('precio_alojamiento',5,2);
            $table->timestamps('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host',100);
            $table->foreign('id_comision')->references('id_comision')->on('comision');
            $table->foreign('id_datos_servicio')->references('id_datos_servicio')->on('datos_servicio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio');
    }
}
