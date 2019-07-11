<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
