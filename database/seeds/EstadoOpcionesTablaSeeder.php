<?php

use Illuminate\Database\Seeder;

class EstadoOpcionesTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('estado_opciones')->insert([

            'estado' =>'Activo',


            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        DB::table('estado_opciones')->insert([

            'estado' =>'Cancelado',


            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        DB::table('estado_opciones')->insert([

            'estado' =>'Pendiente',


            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
    }

}
