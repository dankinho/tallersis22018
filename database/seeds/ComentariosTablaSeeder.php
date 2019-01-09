<?php

use Illuminate\Database\Seeder;

class ComentariosTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('servicio_mascota_comentarios')->insert([

            'id_usuario' =>1,
            'id_servicio_mascota' =>1,
            'fecha_hora'=>'2018-10-05 17:55:08',
            'comentario' =>'Servicio bueno y agradable lugar, muy recomendado',
            'calificacion' =>5,
             'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //2
        DB::table('servicio_mascota_comentarios')->insert([

            'id_usuario' =>1,
            'id_servicio_mascota' =>1,
            'fecha_hora'=>'2018-10-05 17:55:08',
            'comentario' =>'Me gusta mucho el cuidado a mi perro',
            'calificacion' =>5,
             'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);

    }

}