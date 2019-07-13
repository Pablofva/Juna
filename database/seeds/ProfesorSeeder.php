<?php

use Illuminate\Database\Seeder;
use App\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Profesor::create([
            'nombre'=>'DAVID',
            'apellido'=>'AGUADA'
        ]);
        Profesor::create([
            'nombre'=>'GUSTAVO',
            'apellido'=>'SILVA'
        ]);
        Profesor::create([
            'nombre'=>'MARIA',
            'apellido'=>'GOMEZ'
        ]);
    }
}
