<?php

use Illuminate\Database\Seeder;

class CancelacionesTablaSeeder extends Seeder
{
     public function run()
    {
        //1
        DB::table('cancelacion_servicios_mascotas')->insert([

            'id_servicio_mascota' =>1,
            'id_estado' =>1,
            'fecha_cancelacion'=>'2018-02-05',
            'justificacion' =>'Cancelacion de viajes',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'

        ]);

    }
}
