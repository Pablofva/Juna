<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Fecades\DB;
use App\Comision;
use App\Materia;
use App\Aula;

class ComisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$id_algo = Materia::where('nombre', 'Algoritmos y Programacion')->value('id');
    	$id_opI = Materia::where('nombre', 'Sistemas Operativos I')->value('id');

    	$this->comisionesAlgoritmos($id_algo);
    	$this->comisionesSistemaOPI($id_opI);
        
    }

    protected function comisionesAlgoritmos($id_algo)
    {
    	Comision::create([
    		'nombre'=> 'COMISION 1',
    		'horario'=> '12:00 a 16:00',
    		'dia' => 'Lunes',
    		'materia_id' => $id_algo,
			'aula_id' => 1,
			'profesor_id'=>1
    		
		]);
		Comision::create([
    		'nombre'=> 'COMISION 1',
    		'horario'=> '12:00 a 16:00',
    		'dia' => 'Jueves',
    		'materia_id' => $id_algo,
			'aula_id' => 43,
			'profesor_id'=>1
    		
    	]);

    	Comision::create([
    		'nombre'=> 'COMISION 2',
    		'horario'=> '15:00 a 19:00',
    		'dia' => 'Jueves',
    		'materia_id' => $id_algo,
			'aula_id' => 1,
			'profesor_id'=>2
    		
    	]);

    	Comision::create([
    		'nombre'=> 'COMISION 3',
    		'horario'=> '18:00 a 22:00',
    		'dia' => 'Martes',
    		'materia_id' => $id_algo,
			'aula_id' => 1,
			'profesor_id'=>3
    		
    	]);
    	Comision::create([
    		'nombre'=> 'COMISION 4',
    		'horario'=> '18:00 a 22:00',
    		'dia' => 'Miercoles',
    		'materia_id' => $id_algo,
			'aula_id' => 1,
			'profesor_id'=>4
    		
    	]);

    	Comision::create([
    		'nombre'=> 'COMISION 5',
    		'horario'=> '08:00 a 12:00',
    		'dia' => 'Martes',
    		'materia_id' => $id_algo,
			'aula_id' => 1,
			'profesor_id'=>3
    		
    	]);
    }

    protected function comisionesSistemaOPI($id_opI)
    {
    	Comision::create([
    		'nombre'=> 'COMISION 1',
    		'horario'=> '12:00 a 16:00',
    		'dia' => 'Miercoles',
    		'materia_id' => $id_opI,
			'aula_id' => 2,
			'profesor_id'=>2
    		
		]);
		Comision::create([
    		'nombre'=> 'COMISION 1',
    		'horario'=> '12:00 a 16:00',
    		'dia' => 'Viernes',
    		'materia_id' => $id_opI,
			'aula_id' => 4,
			'profesor_id'=>2
    		
    	]);

    	Comision::create([
    		'nombre'=> 'COMISION 2',
    		'horario'=> '15:00 a 19:00',
    		'dia' => 'Viernes',
    		'materia_id' => $id_opI,
			'aula_id' => 2,
			'profesor_id'=>1
    		
    	]);

    	Comision::create([
    		'nombre'=> 'COMISION 3',
    		'horario'=> '18:00 a 22:00',
    		'dia' => 'Miercoles',
    		'materia_id' => $id_opI,
			'aula_id' => 2,
			'profesor_id'=>3
    		
    	]);
    	Comision::create([
    		'nombre'=> 'COMISION 4',
    		'horario'=> '18:00 a 22:00',
    		'dia' => 'Martes',
    		'materia_id' => $id_opI,
			'aula_id' => 2,
			'profesor_id'=>2
    		
    	]);

    	Comision::create([
    		'nombre'=> 'COMISION 5',
    		'horario'=> '08:00 a 12:00',
    		'dia' => 'Martes',
    		'materia_id' => $id_opI,
			'aula_id' => 2,
			'profesor_id'=>1
    		
    	]);
    }
}
