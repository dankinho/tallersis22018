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
        DB::table('servicios_mascotas')->insert([

            'id_servicio' =>1,
            'id_mascota' =>1,
            'id_usuario'=>1,
            'id_estado_servicio'=>1,
            'cat_id_tipo_servicio' =>22,
            'fecha_servicio_inicio' =>'2018-02-05',
            'fecha_servicio_final' =>'2018-01-05',
            'precio_servicio_mascota' =>50,
            'porcentaje_comision' =>10,
            'url_imagen_servicio_mascota' =>'casa1.jpg',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'

        ]);
        DB::table('servicios_mascotas')->insert([

            'id_servicio' =>2,
            'id_mascota' =>1,
            'id_usuario'=>1,
            'id_estado_servicio'=>1,
            'cat_id_tipo_servicio' =>22,
            'fecha_servicio_inicio' =>'2018-12-10',
            'fecha_servicio_final' =>'2018-12-10',
            'precio_servicio_mascota' =>70,
            'porcentaje_comision' =>60,
            'url_imagen_servicio_mascota' =>'casa2.jpg',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'

        ]);
        DB::table('servicios_mascotas')->insert([

            'id_servicio' =>3,
            'id_mascota' =>3,
            'id_usuario'=>2,
            'id_estado_servicio'=>1,
            'cat_id_tipo_servicio' =>23,
            'fecha_servicio_inicio' =>'2018-02-05',
            'fecha_servicio_final' =>'2018-01-05',
            'precio_servicio_mascota' =>40,
            'porcentaje_comision' =>30,
            'url_imagen_servicio_mascota' =>'casa3.jpg',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'

        ]);

        DB::table('servicios_mascotas')->insert([

            'id_servicio' =>4,
            'id_mascota' =>4,
            'id_usuario'=>1,
            'id_estado_servicio'=>1,
            'cat_id_tipo_servicio' =>23,
            'fecha_servicio_inicio' =>'2018-12-10',
            'fecha_servicio_final' =>'2018-12-10',
            'precio_servicio_mascota' =>100,
            'porcentaje_comision' =>90,
            'url_imagen_servicio_mascota' =>'casa4.jpg',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'

        ]);
    }
}
