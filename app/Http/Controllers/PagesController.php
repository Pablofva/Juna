<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Materia;

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

        return view('materias', compact('materias'));
    }




}
