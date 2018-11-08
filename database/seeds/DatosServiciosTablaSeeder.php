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
            'cat_id_tipo_campo_exterior' =>19,
            'direccion_calle' =>'calle molle nro 1a',
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
