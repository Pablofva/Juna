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
        $this->truncateTables([
            'sedes', 'institutos', 'edificios','aulas', 'carreras', 'materias', 'comisions'

        ]);

    	  $this->call(SedesTableSeeder::class);
        $this->call(EdificiosTableSeeder::class);
        $this->call(InstitutosTableSeeder::class);
        $this->call(AulasTableSeeder::class);
        $this->call(CarrerasTableSeeder::class);
        $this->call(MateriasTableSeeder::class);
        $this->call(ComisionsTableSeeder::class);
    	
    }

    protected function truncateTables(array $tablas)
    {
        //Permite vaciar las tablas para poder volver a llenar con los datos acualizados
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach($tablas as $tabla ) {
              
              DB::table($tabla)->truncate();
              
          }  
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        

    }
}
