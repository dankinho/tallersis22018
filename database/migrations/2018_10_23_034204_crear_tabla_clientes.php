<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuarios')->unsigned();
            $table->string('nombre_cliente',100);
            $table->string('apellido_cliente',100);
            $table->integer('cat_id_tipo_identidad');
            $table->string('num_doc_identidad',100);
            $table->string('genero_cliente',100);
            $table->string('direccion_casa',100);
            $table->string('direccion_numero_casa',100);
            $table->boolean('estado_usuario');
            $table->integer('cat_macrodistrito');
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host',100);
            $table->foreign('id')->references('id')->on('users');

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
        Schema::dropIfExists('clientes');
    }
}
