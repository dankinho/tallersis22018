<?php

use Illuminate\Database\Seeder;

class MascotasTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mascotas')->insert([

            'id_clientes' =>2,
            'nombre_mascota' =>'Laika',
            'fecha_nacimiento'=>'2017-01-05',
            'genero' =>'Hembra',
            'cat_raza' => 1,
            'cat_tamano' =>1,
            'url_imagen_mascota' => 'www.google.com' ,
            'observaciones' =>'Sin observaciones',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);

    }
}
