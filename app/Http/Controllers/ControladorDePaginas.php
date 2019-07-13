<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class ControladorDePaginas extends Controller
{
 	public function inicio(){
 		return view('pruebadosseleccion');
 	}

 	public function institutos(){
 		return view('pruebadosinstitutos');
 	}

 	public function pruebados(){
 		return view('pruebados');
 	}

 	public function ingenieria(){

 		$id= App\Carrera::where('nombre','Ingenieria en Informatica')->value('id');

 		$materias=App\Materia::where('carrera_id', $id)->get();

 		return view('pruebadosingenieria',compact('materias'));
 	}

 	public function salud(){
 		return view('pruebadossalud');
 	}

 	public function iniciales(){
 		return view('pruebadosiniciales');
 	}

 	public function sociales(){
 		return view('pruebadossociales');
 	}

 	public function informatica($materia){
 		


		$comisiones=App\Comision::where('materia_id',$materia)->get();
		
 		return view('pruebadosinformatica',compact('comisiones'));

 	}

 	public function mapas(){
 		
 		$edificio= App\Edificio::where('nombre','Enrique Mosconi' )->value('id');

 		$aulas = App\Aula::where('edificio_id', $edificio)->get();

 		return view('mapas',compact('aulas'));
 	}

 	

 	
}	