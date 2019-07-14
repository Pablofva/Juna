<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Carrera;
use App\Materia;
use App\Comision;

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
    // CONSULTA SIN AJAX LISTAR AULAS
    public function listarAulas($id=null){
        // CONSULTA CON INNER JOIN AULAS 
        
        $aulas=Comision::select('comisions.numero as comision','m.nombre as materia','p.nombre','p.apellido')
        ->join('materias as m','comisions.materia_id','=','m.id')
        ->join('profesors as p','comisions.profesor_id','=','p.id')
        ->join('aulas as a','comisions.aula_id','=','a.id')
        ->join('edificios as e','a.edificio_id','=','e.id')
        ->join('sedes as s','e.sede_id','=','s.id')
        ->where('m.id',$id)
        ->distinct()
        ->get();
        $copia=Comision::select('comisions.numero as comision','comisions.dia_horario as horario','m.nombre as materia','a.nombre as aula','p.nombre','p.apellido','e.nombre as edificio','s.nombre as sede')
        ->join('materias as m','comisions.materia_id','=','m.id')
        ->join('profesors as p','comisions.profesor_id','=','p.id')
        ->join('aulas as a','comisions.aula_id','=','a.id')
        ->join('edificios as e','a.edificio_id','=','e.id')
        ->join('sedes as s','e.sede_id','=','s.id')
        ->where('m.id',$id)
        ->get();
        // HACER PAGINA DE AULAS
        return view('aulas',compact('aulas','copia'));
    }
    public function nosotros($nombre=null){
        $equipo=['juan','david','alex'];


        // return view('nosotros',['equipo'=>$equipo]);la otra alternativa es
        return view('nosotros',compact('equipo','nombre'));
    }
}
