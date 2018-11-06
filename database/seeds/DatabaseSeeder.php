<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //  $this->truncateTables(['talonarios']);::class);
        $this->call(UsersTableSedder::class);
        $this->call(CatalogosTableSeeder::class);

         $this->call(EmpresasTablaSeeder::class);
        $this->call(TalonarioTablaSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(ClientesTableSedder::class);
        $this->call(MascotasTableSedder::class);
    }
    protected  function  truncateTables(array  $tables) //para vaciar tablas
    {
        //desactivar revision de llaves foraneas
        DB:: statement('SET FOREIGN_KEY_CHECKS = 0'); //Desactivamos la revisión de claves foráneas
        //vacia la tabla
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB:: statement('SET FOREIGN_KEY_CHECKS = 1'); // Reactivamos la revisión de claves foráneas
    }
}
