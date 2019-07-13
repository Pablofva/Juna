<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Sede;
class SedesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	

    	Sede::create([
    		'nombre'=> 'Central',
    		'calleynum' => 'Av. Calchaquí 6200',
    		'localidad' => ' Florencio Varela'
    	]);
    	
    }
}
