<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgergarDeletedsfot extends Migration
{
    public function up()
    {
        Schema::table('talonarios', function (Blueprint $table) {
            $table->softDeletes(); //Nueva línea, para el borrado lógico

        });

    }

    public function down()
    {
        Schema::table('talonarios', function (Blueprint $table) {
            $table->softDeletes(); //Nueva línea, para el borrado lógico

        });
    }
}
