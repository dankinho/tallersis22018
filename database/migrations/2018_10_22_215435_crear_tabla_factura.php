<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->increments('id_factura');
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_talonario')->unsigned();
            $table->integer('id_empleado')->unsigned();
            $table->integer('n_factura');
            $table->integer('codigo_control');
            $table->timestamps('fecha_factura');
            $table->string('estado_pago',100);
            $table->integer('descuentos');
            $table->decimal('importe_total',10,2);
            $table->decimal('importe_no_credfis',10,2);
            $table->string('url_codigo_qr',250);
            $table->timestamps('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host',100);
            $table->foreign('id_cliente')->references('id_cliente')->on('cliente');
            $table->foreign('id_talonario')->references('id_talonario')->on('talonario');
            $table->foreign('id_empleado')->references('id_empleado')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}
