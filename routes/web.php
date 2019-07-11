<?php
use App\Universidad;
use App\Instituto;

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

Route::get('/','PagesController@inicio');
Route::get('bienvenido', function () {
    return 'hola todo piola';
});
Route::get('fotos','PagesController@fotos')->name('foto');
Route::get('institutos','PagesController@instituto')->name('instituto');
Route::get('listarCarreras/{idCarrera?}','PagesController@listarCarreras')->name('listarCarreras');
Route::get('listarMaterias/{idMateria?}','PagesController@listarMaterias')->name('listarMaterias');
Route::get('login', 'PagesController@login')->name('noticias');
Route::get('nosotros/{nombre?}','PagesController@nosotros')->name('nosotros');
Route::get('leer',function(){
    $Uni=Instituto::all();
    foreach($Uni as $Universidad){
        echo $Universidad->nombre."<br>";
    }
});
Route::get('universidad/{id}/instituto',function($id){

    $institutos = App\Universidad::find($id)->institutos;

foreach ($institutos as $instituto) {
    echo $instituto->nombre."<br>";
}
});
/*Route::get('fotos/{numero?}',function($numero='sin numero'){
return 'estas galerias: '.$numero;
})->where('numero', '[0-9]+')*/