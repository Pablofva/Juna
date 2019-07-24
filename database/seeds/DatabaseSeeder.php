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
            'institutos', 'carreras', 'sedes', 'edificios', 'aulas', 'materias', 'comisions', 'profesors'
            

        ]);

        $this->call(InstitutosTableSeeder::class);
        $this->call(CarrerasTableSeeder::class);
        $this->call(SedesTableSeeder::class);
        $this->call(EdificiosTableSeeder::class);
        $this->call(AulasTableSeeder::class);
        $this->call(MateriasTableSeeder::class);
        $this->call(ProfesorTableSeeder::class);
        $this->call(ComisionsTableSeeder::class);
        
    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    	
    }
}
