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
            'tipo_serv' =>0,
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);

        DB::table('servicios')->insert([

            'id_comision' =>1,
            'id_datos_servicio' =>2,
            'cat_id_tipo_servicio'=>21,
            'cat_id_estado_servicio' =>22,
            'titulo' => 'Casa en Mallasilla',
            'descripcion' =>'incluye terraza',
            'precio_paseo' => 20 ,
            'precio_alojamiento' =>42,
            'tipo_serv' =>0,
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        DB::table('servicios')->insert([

            'id_comision' =>1,
            'id_datos_servicio' =>3,
            'cat_id_tipo_servicio'=>21,
            'cat_id_estado_servicio' =>22,
            'titulo' => 'alojamiento en Calacoto',
            'descripcion' =>'patio y terraza incluido',
            'precio_paseo' => 20 ,
            'precio_alojamiento' =>54,
            'tipo_serv' =>0,
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);

        DB::table('servicios')->insert([

            'id_comision' =>1,
            'id_datos_servicio' =>1,
            'cat_id_tipo_servicio'=>21,
            'cat_id_estado_servicio' =>22,
            'titulo' => 'Condominio con cancha',
            'descripcion' =>'con paseos en la manana',
            'precio_paseo' => 20 ,
            'precio_alojamiento' =>32,
            'tipo_serv' =>0,
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]); DB::table('servicios')->insert([

        'id_comision' =>1,
        'id_datos_servicio' =>2,
        'cat_id_tipo_servicio'=>21,
        'cat_id_estado_servicio' =>23,
        'titulo' => 'paseos por Valencia',
        'descripcion' =>'paseos tranquilos',
        'precio_paseo' => 20 ,
        'precio_alojamiento' =>40,
        'tipo_serv' =>0,
        'tx_fecha' =>'2018-10-05 17:55:08',
        'tx_id' =>'1',
        'tx_host'  =>'0.0.0.0'
    ]);

        DB::table('servicios')->insert([

            'id_comision' =>1,
            'id_datos_servicio' =>3,
            'cat_id_tipo_servicio'=>21,
            'cat_id_estado_servicio' =>23,
            'titulo' => 'Paseos en Miraflores',
            'descripcion' =>'paseos por parques',
            'precio_paseo' => 20 ,
            'precio_alojamiento' =>60,
            'tipo_serv' =>0,
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]); DB::table('servicios')->insert([

        'id_comision' =>1,
        'id_datos_servicio' =>1,
        'cat_id_tipo_servicio'=>21,
        'cat_id_estado_servicio' =>23,
        'titulo' => 'Paseos en Condominios',
        'descripcion' =>'paseos con bicicleta',
        'precio_paseo' => 20 ,
        'precio_alojamiento' =>55,
        'tipo_serv' =>0,
        'tx_fecha' =>'2018-10-05 17:55:08',
        'tx_id' =>'1',
        'tx_host'  =>'0.0.0.0'
    ]);

        DB::table('servicios')->insert([

            'id_comision' =>1,
            'id_datos_servicio' =>2,
            'cat_id_tipo_servicio'=>21,
            'cat_id_estado_servicio' =>23,
            'titulo' => 'Paseos en Zona centro',
            'descripcion' =>'Paseos y juegos en el parque ',
            'precio_paseo' => 20 ,
            'precio_alojamiento' =>52,
            'tipo_serv' =>0,
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
    }
}//dfgsgf
