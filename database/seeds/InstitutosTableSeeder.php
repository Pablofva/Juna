<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Fecades\DB;
use App\Instituto;

class InstitutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instituto::create([
    		'nombre'=> 'Ingenieria y Agronomia',
    		
    	]);
    	Instituto::create([
    		'nombre'=> 'Ciencias Sociales y Administracion',
    		
    	]);
    	Instituto::create([
    		'nombre'=> 'Ciencias de la Salud',
    		
    	]);
    	Instituto::create([
    		'nombre'=> 'Estudios Iniciales',
    		
    	]);
    }
}
