<?php

use Illuminate\Database\Seeder;
use App\Comision;
use App\Materia;
use App\Aula;
//use App\Profesor;

class ComisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Comision::create([
            'materia_id' => '',
            'aula_id' => '',
            'profesor_id' => 0,
            'numero' => 1,
            'dia_horario' => '',
        ]);

    }
}
