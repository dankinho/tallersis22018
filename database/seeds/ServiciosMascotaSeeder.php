<?php

use Illuminate\Database\Seeder;

class ServiciosMascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicio_mascota')->insert([

            'id_servicio' =>1,
            'id_mascota' =>1,
            'id_estado_servicio'=>1,
            'cat_id_tipo_servicio' =>21,
            'fecha_servicio_inicio' =>'2018-02-05',
            'fecha_servicio_final' =>'2018-01-05',
            'precio_servicio_mascota' =>50,
            'porcentaje_comision' =>10,
            'url_imagen_servicio_mascota' =>'www....',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'

        ]);
        DB::table('servicio_mascota')->insert([

            'id_servicio' =>2,
            'id_mascota' =>2,
            'id_estado_servicio'=>1,
            'cat_id_tipo_servicio' =>22,
            'fecha_servicio_inicio' =>'2018-02-05',
            'fecha_servicio_final' =>'2018-01-05',
            'precio_servicio_mascota' =>50,
            'porcentaje_comision' =>10,
            'url_imagen_servicio_mascota' =>'www....',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'

        ]);
    }
}
