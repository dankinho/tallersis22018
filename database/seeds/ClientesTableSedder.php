<?php

use Illuminate\Database\Seeder;

class ClientesTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([

            'id_usuarios' =>1,
            'nombre_cliente' =>'Fabiola ',
            'apellido_cliente'=>'Acarapi',
            'cat_id_tipo_identidad' =>1,
            'num_doc_identidad' => '8765324 ',
            'genero_cliente' =>'Femenino',
            'direccion_casa' => 'Calle 1 de Obrajes' ,
            'direccion_numero_casa' =>'660',
            'estado_usuario' => true,
            'cat_macrodistrito' =>3,
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        DB::table('clientes')->insert([

            'id_usuarios' =>2,
            'nombre_cliente' =>'Pedro ',
            'apellido_cliente'=>'Santander',
            'cat_id_tipo_identidad' =>2,
            'num_doc_identidad' => '7766544 ',
            'genero_cliente' =>'Masculino',
            'direccion_casa' => 'Calle 19 de Obrajes' ,
            'direccion_numero_casa' =>'1660',
            'estado_usuario' => true,
            'cat_macrodistrito' =>4,
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);

    }
}
