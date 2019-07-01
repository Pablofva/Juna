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

Route::get('/', function () {
    return view('inicio');
});

Route::get('opciones', function () {
    return view('opciones');
});

Route::get('institutos', function () {
    return view('institutos');
});


Route::get('login', function () {
    return view('login');
});


Route::get('materias', function () {
    return view('materias');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
