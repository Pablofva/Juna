<?php

use Illuminate\Database\Seeder;
use App\Carrera;
use App\Instituto;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // CONSULTA SQL VALUE ES COMO EL SELECT opcion 1
        // $institutoId=DB::table('institutos')->where('nombre','INGENIERIA')->value('id');
        // CONSULTA ELOQUEN
        $institutoId=Instituto::where('nombre','INGENIERIA')->value('id');
        Carrera::create([
            'instituto_id'=>$institutoId,
            'nombre'=>'INFORMATICA'
        ]);
        Carrera::create([
            'instituto_id'=>$institutoId,
            'nombre'=>'ELECTROMECANICA'
        ]);
        Carrera::create([
            'instituto_id'=>$institutoId,
            'nombre'=>'INDUSTRIAL'
        ]);
        Carrera::create([
            'instituto_id'=>$institutoId,
            'nombre'=>'PETROLEO'
        ]);
        
        
    }
}
