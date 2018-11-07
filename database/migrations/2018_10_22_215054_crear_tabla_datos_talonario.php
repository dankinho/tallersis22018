<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDatosTalonario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talonarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_empresa')->unsigned();
            $table->integer('dosificacion');
            $table->integer('n_autorizacion');
            $table->string('leyenda', 250);
            $table->date('fecha_limite_emision');
            $table->boolean('estado');
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host',100);
            $table->foreign('id_empresa')->references('id')->on('empresas');

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
        Schema::dropIfExists('talonarios');
    }
}
