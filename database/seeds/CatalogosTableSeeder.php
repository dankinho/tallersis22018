<?php

use Illuminate\Database\Seeder;

class CatalogosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogos')->insert([

            'entidad' =>'Tipo de identificacion',
            'descripcion' =>'Tipo de identificacion de la persona',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);

        DB::table('catalogos')->insert([

            'entidad' =>'Macrodistrito',
            'descripcion' =>'Macrodistrito de la vivienda de la persona',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        DB::table('catalogos')->insert([

            'entidad' =>'Raza',
            'descripcion' =>'Raza de las mascotas',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        DB::table('catalogos')->insert([

            'entidad' =>'Tamanio',
            'descripcion' =>'Tamanio de la mascota',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //cris 5 y 6
        DB::table('catalogos')->insert([

            'entidad' =>'Tipo_casa',
            'descripcion' =>'Tipos de casas para alojamientos',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        DB::table('catalogos')->insert([

            'entidad' =>'Tipo_campo_exterior',
            'descripcion' =>'Tamanio del campo exterior en mts',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //7 y 8
        DB::table('catalogos')->insert([

            'entidad' =>'Tipo_servicio',
            'descripcion' =>'Tipos de servicios que brindamos',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        DB::table('catalogos')->insert([

            'entidad' =>'Estado_servicio',
            'descripcion' =>'si el servicio esta activo, cancelado, pendiente, etc',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
    }
}
