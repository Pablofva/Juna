<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Materia;
use App\Comision;

class PagesController extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function login(){
        return view('admin/login');
    }

    public function aulas(){
        return view('aulas');
    }

    public function mapas(){
        return view('mapas');
    }

    public function oficinas(){
        return view('oficinas');
    }

    public function carreras($id = null)
    {
        $carreras = Carrera::where('instituto_id', $id)->get();

        return view('carreras', compact('carreras'));
    }

    public function materias($id = null)
    {
        $materias = Materia::where('carrera_id', $id)->get();

        return $materias;
    }
    public function listarComisiones($id)
    {
        //$comisions = Comision::where('materia_id', $id)->get();
        $comisions=Comision::select('comisions.nombre as comision','m.nombre as materia','p.nombre','p.apellido')
        ->join('materias as m','comisions.materia_id','=','m.id')
        ->join('profesors as p','comisions.profesor_id','=','p.id')
        ->join('aulas as a','comisions.aula_id','=','a.id')
        ->join('edificios as e','a.edificio_id','=','e.id')
        ->join('sedes as s','e.sede_id','=','s.id')
        ->where('m.id',$id)
        ->distinct()
        ->get();

        $copia=Comision::select('comisions.nombre as comision','comisions.horario as horario','m.nombre as materia','a.numero as aula','p.nombre','p.apellido','e.nombre as edificio','s.nombre as sede','s.calleynum as direccion','e.id as edificioId','e.imagen as imagen')
        ->join('materias as m','comisions.materia_id','=','m.id')
        ->join('profesors as p','comisions.profesor_id','=','p.id')
        ->join('aulas as a','comisions.aula_id','=','a.id')
        ->join('edificios as e','a.edificio_id','=','e.id')
        ->join('sedes as s','e.sede_id','=','s.id')
        ->where('m.id',$id)
        ->get();
        // HACER PAGINA DE AULAS
        return view('comision',compact('comisions','copia'));
    }




}
