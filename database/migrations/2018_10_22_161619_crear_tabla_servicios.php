<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaServicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id_tipo_casa');
            $table->integer('cat_id_tipo_campo_exterior');
            $table->string ('direccion_calle', 100);
            $table->boolean('existencia_campo_exterior');
            $table->decimal('tamano_campo_exterior', 5, 2);
            $table->boolean('existencia_perro_casa');
            $table->integer('cant_perro_casa');
            $table->float('coor_longitud', 10, 20);
            $table->float('coor_latitud', 10, 20);
            $table->decimal('coor_altitud', 10, 10);
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string ('tx_host', 100);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); //Nueva línea, para el borrado lógico



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_servicios');
    }
}
