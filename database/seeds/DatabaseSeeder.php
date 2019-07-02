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
    	$this->call(SedesTableSeeder::class);
    	$this->call(EdificiosTableSeeder::class);
        $this->call(AulasTableSeeder::class);
    }
}
