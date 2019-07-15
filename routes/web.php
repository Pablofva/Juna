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

Route::get('/', 'PagesController@inicio')->name('inicio');

Route::get('/login', 'PagesController@login')->name('login');

Route::get('/aulas', 'PagesController@aulas')->name('aulas');

Route::get('/mapas', 'PagesController@mapas')->name('mapas');

Route::get('/oficinas', 'PagesController@oficinas')->name('oficinas');

Route::get('/carreras/{id?}', 'PagesController@carreras')->name('carreras');