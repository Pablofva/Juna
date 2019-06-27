<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function institutos()
    {
        return view('institutos');
    }

    public function institutos_s($saludo = null)
    {
        $variables = ['Hola', 'Chau', 'Jajaj'];

        return view('institutos', compact('variables', 'saludo'));
    }

    public function home()
    {
        $notas = App\Nota::all();
        return view('home', compact('notas'));
    }

    public function home_detalle($id = null)
    {
        $notas = App\Nota::all();
        $nota = App\Nota::findOrFail($id);

        return view('home', compact('notas', 'nota'));
    }
}
