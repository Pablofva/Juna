<?php

use Illuminate\Database\Seeder;
use App\Edificio;

class EdificioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Edificio::create([
            'sede_id'=>1,
            'nombre'=>'UNICO'
            ]);
        Edificio::create([
                'sede_id'=>2,
                'nombre'=>'SABIO'
            ]);
            Edificio::create([
                'sede_id'=>2,
                'nombre'=>'MOSCONI'
            ]);
    }
}
