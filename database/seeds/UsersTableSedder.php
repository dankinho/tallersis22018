<?php

use Illuminate\Database\Seeder;

class UsersTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Empresa::class, 2)->create();
        DB::table('users')->insert([

            'name' =>'Fabiola Acarapi',
            'email' =>'fabi2@gmail.com',
            'password'=>'123456'

        ]);
        DB::table('users')->insert([

            'name' =>'Pedro Santander',
            'email' =>'pedro2@gmail.com',
            'password'=>'123456'

        ]);
    }
}
