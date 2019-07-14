<?php

use Illuminate\Database\Seeder;
use App\Comision;

class ComisionSeeder extends Seeder
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
            'materia_id'=>1,
            'aula_id'=>1,
            'profesor_id'=>1,
            'numero'=>1,
            'dia_horario'=>'lunes 18:00 a 20:00'
        ]);
        Comision::create([
            'materia_id'=>1,
            'aula_id'=>1,
            'profesor_id'=>1,
            'numero'=>1,
            'dia_horario'=>'jueves 18:00 a 20:00'
        ]);
        Comision::create([
            'materia_id'=>2,
            'aula_id'=>1,
            'profesor_id'=>1,
            'numero'=>1,
            'dia_horario'=>'lunes 08:00 a 10:00'
        ]);
        Comision::create([
            'materia_id'=>2,
            'aula_id'=>1,
            'profesor_id'=>1,
            'numero'=>1,
            'dia_horario'=>'jueves 08:00 a 10:00'
        ]);
        Comision::create([
            'materia_id'=>3,
            'aula_id'=>2,
            'profesor_id'=>2,
            'numero'=>2,
            'dia_horario'=>'miercoles 08:00 a 10:00'
        ]);
        Comision::create([
            'materia_id'=>3,
            'aula_id'=>2,
            'profesor_id'=>2,
            'numero'=>2,
            'dia_horario'=>'viernes 08:00 a 10:00'
        ]);
    }
}
