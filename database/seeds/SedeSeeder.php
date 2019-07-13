<?php

use Illuminate\Database\Seeder;
use App\Sede;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        Sede::create([
            'nombre'=>'HEC',
            'calleynum'=>'#2222',
            'localidad'=>'#2222'
        ]);
        Sede::create([
            'nombre'=>'YPF',
            'calleynum'=>'#2222',
            'localidad'=>'#2222'
        ]);
        Sede::create([
            'nombre'=>'SEDE 1',
            'calleynum'=>'#2222',
            'localidad'=>'#2222'
        ]);
    }
}
