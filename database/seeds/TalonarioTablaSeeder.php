<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TalonarioTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Empresa::class, 2)->create();
        DB::table('talonarios')->insert([

            'id_empresa' =>1,
            'dosificacion' =>120034567,
            'n_autorizacion'=>0057423,
            'leyenda' =>'Servicios relacionados con el cuidado de la mascota',
            'estado' =>true,
            'fecha_limite_emision' =>'2018-12-05',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
    }
}
