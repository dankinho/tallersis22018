<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tipo de identificacion
        //1
        DB::table('items')->insert([

            'id_catalogos' =>1,
            'codigo' =>'ti1',
            'nombre' =>'Carnet',
            'descripcion' =>' ',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //2
        DB::table('items')->insert([

            'id_catalogos' =>1,
            'codigo' =>'ti2',
            'nombre' =>'Pasaporte',
            'descripcion' =>' ',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //Macrodistritos
        //3
        DB::table('items')->insert([

            'id_catalogos' =>2,
            'codigo' =>'m1',
            'nombre' =>'Mallasa',
            'descripcion' =>'Mallasa',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //4
        DB::table('items')->insert([

            'id_catalogos' =>2,
            'codigo' =>'m2',
            'nombre' =>'Zona Sur',
            'descripcion' =>'Zona Sur',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //5
        DB::table('items')->insert([

            'id_catalogos' =>2,
            'codigo' =>'m3',
            'nombre' =>'San Antonio',
            'descripcion' =>'San Antonio',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //6
        DB::table('items')->insert([

            'id_catalogos' =>2,
            'codigo' =>'m4',
            'nombre' =>'Periférica',
            'descripcion' =>'Periférica',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //7
        DB::table('items')->insert([

            'id_catalogos' =>2,
            'codigo' =>'m5',
            'nombre' =>'Max Paredes ',
            'descripcion' =>'Max Paredes ',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //Raza de perros
        //8
        DB::table('items')->insert([

            'id_catalogos' =>3,
            'codigo' =>'r1',
            'nombre' =>'Bulldog',
            'descripcion' =>'Bulldog',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //9
        DB::table('items')->insert([

            'id_catalogos' =>3,
            'codigo' =>'r2',
            'nombre' =>'Mestizo',
            'descripcion' =>'Mestizo',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //10
        DB::table('items')->insert([

            'id_catalogos' =>3,
            'codigo' =>'r3',
            'nombre' =>'Pastor Aleman',
            'descripcion' =>'Pastor Aleman',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //11
        DB::table('items')->insert([

            'id_catalogos' =>3,
            'codigo' =>'r4',
            'nombre' =>'Cocker',
            'descripcion' =>'Cocker',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //12
        DB::table('items')->insert([

            'id_catalogos' =>3,
            'codigo' =>'r5',
            'nombre' =>'Caniche',
            'descripcion' =>'Caniche',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //13
        DB::table('items')->insert([

            'id_catalogos' =>3,
            'codigo' =>'r6',
            'nombre' =>'Labrador Retriever',
            'descripcion' =>'Labrador Retriever',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //tamanio de la mascota
        //14
        DB::table('items')->insert([

            'id_catalogos' =>4,
            'codigo' =>'t1',
            'nombre' =>'Pequenio',
            'descripcion' =>'menor de 30cm el largo de la cabeza a la cola',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //15
        DB::table('items')->insert([

            'id_catalogos' =>4,
            'codigo' =>'t2',
            'nombre' =>'Mediano',
            'descripcion' =>'mayor a 30cm y menor a 70cm el largo de la cabeza a la cola',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
        //16
        DB::table('items')->insert([

            'id_catalogos' =>4,
            'codigo' =>'t3',
            'nombre' =>'Grande',
            'descripcion' =>'Mayor a 70cm el largo de la cabeza a la cola',
            'tx_fecha' =>'2018-10-05 17:55:08',
            'tx_id' =>'1',
            'tx_host'  =>'0.0.0.0'
        ]);
    }
}
