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
        Schema::create('servicios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_comision')->unsigned();
            $table->integer('id_datos_servicio')->unsigned();
            $table->integer('cat_id_tipo_servicio');
            $table->integer('cat_id_estado_servicio');
            $table->string('titulo',100);
            $table->string('descripcion',250);
            $table->decimal('precio_paseo',5,2);
            $table->decimal('precio_alojamiento',5,2);
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host',100);
            $table->foreign('id_comision')->references('id')->on('comisiones');
            $table->foreign('id_datos_servicio')->references('id')->on('datos_servicios');
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
        Schema::table('servicios', function (Blueprint $table) {
            $table->dropForeign('id_comision');
            $table->dropForeign('id_datos_servicio');
            $table->foreign('id_comision')
                ->references('d_comision')->on('comisiones')
                ->onDelete('cascade');
        });


        Schema::dropIfExists('servicios');
    }
}
