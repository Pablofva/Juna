<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTable(['carreras','institutos','materias','sedes','edificios','aulas','profesors','comisions']);

        $this->call(InstitutoSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(SedeSeeder::class);
        $this->call(EdificioSeeder::class);
        $this->call(AulaSeeder::class);
        $this->call(ProfesorSeeder::class);
        $this->call(ComisionSeeder::class);

    }
    protected function truncateTable(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tables as $table){
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
