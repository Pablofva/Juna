<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Fecades\DB;
use App\Carrera;
use App\Materia;
class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->materiasInformatica();
        
    }


    protected function materiasInformatica()
    {
    	$id= Carrera::where('nombre','Ingenieria en Informatica')->value('id');

    	Materia::create([
    		'nombre'=> 'Taller de Ingenieria',
    		'anio' =>'1',
    		'carrera_id' => $id
    		
    	]);

    	Materia::create([
    		'nombre'=> 'Sistemas de Representación',
    		'anio' =>'1',
    		'carrera_id' => $id
    		
    	]);

    	Materia::create([
    		'nombre'=> 'Fundamentos de Informatica',
    		'anio' =>'1',
    		'carrera_id' => $id
    		
    	]);

    	Materia::create([
    		'nombre'=> 'Matematica I',
    		'anio' =>'1',
    		'carrera_id' => $id
    		
    	]);

    	Materia::create([
    		'nombre'=> 'Matematica II',
    		'anio' =>'2',
    		'carrera_id' => $id
    		
    	]);
    		Materia::create([
    		'nombre'=> 'Algoritmos y Programación',
    		'anio' =>'2',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Organizacion y Arquitectura de Computadoras',
    		'anio' =>'2',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Sistemas Operativos I',
    		'anio' =>'2',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Fisica I',
    		'anio' =>'2',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Matematica III',
    		'anio' =>'2',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Complejidad Temporal, Estructuras de Datos y Algoritmos',
    		'anio' =>'2',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Base de Datos I',
    		'anio' =>'2',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Redes de Computadoras I',
    		'anio' =>'2',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Matematica I',
    		'anio' =>'3',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Fisica II',
    		'anio' =>'3',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Metodologia de Programacion I',
    		'anio' =>'3',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Informacion y Comunicaciones',
    		'anio' =>'3',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Ingenieria de Software I',
    		'anio' =>'3',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Redes de Computadoras II',
    		'anio' =>'3',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Probabilidad y Estadistica',
    		'anio' =>'3',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Proyecto Software',
    		'anio' =>'3',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Quimica General',
    		'anio' =>'3',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Metodologia de Programacion II',
    		'anio' =>'3',
    		'carrera_id' => $id
    		
    	]);

    		Materia::create([
    		'nombre'=> 'Seguridad de la Informacion',
    		'anio' =>'3',
    		'carrera_id' => $id
    		
    	]);
    }
}
