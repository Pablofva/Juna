<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Carrera;
use App\Materia;

class PagesController extends Controller
{
    public function inicio(){
        return view('inicio');
    }
    public function fotos(){
        return view('fotos');
    }
    public function login(){
        return view('inicio');
    }
    public function instituto(){
        $institutos=App\Instituto::all();
        return view('institutos',compact('institutos'));
    }
    // CONSULTA AJAX LISTAR CARRERAS
    public function listarCarreras($idCarrera=null){
        $carreras=Carrera::where('instituto_id',$idCarrera)->get();
        return $carreras;

    }
    // CONSULTA AJAX LISTAR CARRERAS
    
    public function listarMaterias($idMateria=null){
        $materias=Materia::where('carrera_id',$idMateria)->get();
        return $materias;

    }
    public function nosotros($nombre=null){
        $equipo=['juan','david','alex'];


        // return view('nosotros',['equipo'=>$equipo]);la otra alternativa es
        return view('nosotros',compact('equipo','nombre'));
    }
}
