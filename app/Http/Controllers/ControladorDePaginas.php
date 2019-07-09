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
 		return view('pruebadosingenieria');
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

 	public function informatica(){
 		$comisiones=App\Comision::all();
 		return view('pruebadosinformatica',compact('comisiones'));
 	}

 	public function mapas(){
 		
 		$edificios= App\Edificio::where('nombre','Enrique Mosconi' )->get();

 		

 		$aulas = App\Aula::where('numero', 1)->get();

 		return view('mapas',compact('aulas'));
 	}

 	
}	