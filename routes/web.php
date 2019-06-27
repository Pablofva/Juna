<?php

/*
|--------------------------------------------------------------------------
| Web Routes -php artisan serve-
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/', 'PagesController@inicio')->name('inicio');

// Route::get('punaj/{item?}', function ($item = "") {
//     return "Pantalla principal: ". $item;
// })->where('item', '[0-9]+');

// Route::get('/institutos', 'PagesController@institutos')->name('institutos');
Route::get('home', 'PagesController@home');
Route::get('home/{id?}', 'PagesController@home_detalle')->name('home');
// Route::view('/institutos','institutos')->name('institutos');

Route::get('institutos/{saludo?}', 'PagesController@institutos_s')->name('institutos');


