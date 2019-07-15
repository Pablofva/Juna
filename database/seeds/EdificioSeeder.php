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
            'nombre'=>'MOSCONI',
            'imagen'=>'mosconi.jpg'
            ]);
        Edificio::create([
                'sede_id'=>1,
                'nombre'=>'SABIO',
                'imagen'=>'savio.jpg'
            ]);
            Edificio::create([
                'sede_id'=>1,
                'nombre'=>'PISTARINI',
                'imagen'=>'pistarini.jpg'
            ]);
    }
}
