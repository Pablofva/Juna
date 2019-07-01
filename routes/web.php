<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('pruebados', 'ControladorDePaginas@pruebados');

Route::get('pruebadosseleccion', 'ControladorDePaginas@inicio');

Route::get('/', 'ControladorDePaginas@inicio');

Route::get('pruebadosinstitutos', 'ControladorDePaginas@institutos');

Route::get('pruebadosingenieria', 'ControladorDePaginas@ingenieria');

Route::get('pruebadosinformatica', 'ControladorDePaginas@informatica');

Route::get('pruebadossalud', 'ControladorDePaginas@salud');

Route::get('pruebadosiniciales', 'ControladorDePaginas@iniciales');

Route::get('pruebadossociales', 'ControladorDePaginas@sociales');

Route::get('mapas', 'ControladorDePaginas@mapas');

Route::get('materias', function () {
    return view('materias');
});
