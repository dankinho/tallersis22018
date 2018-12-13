<?php

use Illuminate\Database\Seeder;

class DatosServiciosTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datos_servicios')->insert([
            'cat_id_tipo_casa' => 17,
            'cat_id_tipo_campo_exterior' =>20,
            'direccion_calle' =>'calle Panama',
            'existencia_campo_exterior' =>true,
            'tamano_campo_exterior' => 0.2,
            'existencia_perro_casa' =>true,
            'cant_perro_casa' =>5,
            'coor_longitud'=> 0.23,
            'coor_latitud'=> 0.22,
            'coor_altitud'=> 0.56,

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);

        DB::table('datos_servicios')->insert([
            'cat_id_tipo_casa' => 18,
            'cat_id_tipo_campo_exterior' =>20,
            'direccion_calle' =>'calle Constanerita',
            'existencia_campo_exterior' =>true,
            'tamano_campo_exterior' => 0.2,
            'existencia_perro_casa' =>true,
            'cant_perro_casa' =>5,
            'coor_longitud'=> 0.23,
            'coor_latitud'=> 0.22,
            'coor_altitud'=> 0.56,

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        DB::table('datos_servicios')->insert([
            'cat_id_tipo_casa' => 19,
            'cat_id_tipo_campo_exterior' =>21,
            'direccion_calle' =>'Av. Bolivar',
            'existencia_campo_exterior' =>true,
            'tamano_campo_exterior' => 0.2,
            'existencia_perro_casa' =>true,
            'cant_perro_casa' =>5,
            'coor_longitud'=> 0.23,
            'coor_latitud'=> 0.22,
            'coor_altitud'=> 0.56,

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);

    }
}
