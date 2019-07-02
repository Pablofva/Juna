<?php

use Illuminate\Database\Seeder;

class EdificiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Edificio::class, 1)->create();
    }
}
