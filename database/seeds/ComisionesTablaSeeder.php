<?php

use Illuminate\Database\Seeder;

class ComisionesTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comisiones')->insert([

            'porcentaje_precio_paseo' =>'20',
            'porcentaje_precio_alojamiento'=>'50',

            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
    }
}