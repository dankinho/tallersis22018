<?php

use Illuminate\Database\Seeder;
use App\Empresa;
use Illuminate\Support\Facades\DB;
class EmpresasTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //factory(Empresa::class, 2)->create();
        DB::table('empresas')->insert([

             'nombre' =>'Dogfy',
             'nit' =>1234567,
            'telefono'=>'2450312',
        'celular' =>'79588123',
        'tipo_agencia' =>'Matriz',
        'direccion' =>'Calacoto Calle 6',
        'ciudad' =>'La Paz',
            'estado' =>true,
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
    }
}
