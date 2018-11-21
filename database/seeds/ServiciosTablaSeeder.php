<?php

use Illuminate\Database\Seeder;

class ServiciosTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([

            'id_comision' =>1,
            'id_datos_servicio' =>1,
            'cat_id_tipo_servicio'=>21,
            'cat_id_estado_servicio' =>22,
            'titulo' => 'alojamiento en obrajes',
            'descripcion' =>'alojamiento con jardin en el centro de obrajes',
            'precio_paseo' => 20 ,
            'precio_alojamiento' =>50,

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);

        DB::table('servicios')->insert([

            'id_comision' =>1,
            'id_datos_servicio' =>1,
            'cat_id_tipo_servicio'=>21,
            'cat_id_estado_servicio' =>22,
            'titulo' => 'Paseos en Mallasilla',
            'descripcion' =>'Paseos y juegos en el parque para perros',
            'precio_paseo' => 20 ,
            'precio_alojamiento' =>50,

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);

    }
}//dfgsgf
