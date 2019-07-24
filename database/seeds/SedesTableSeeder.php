<?php

use Illuminate\Database\Seeder;
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
        //SEDE CENTRAL YPF
        Sede::create([

            'nombre' => 'Sede Central (YPF)',
            'calleynum' => 'Av. Calchaqui 6200',
            'localidad' => 'Florencio Varela',

        ]);
        Sede::create([

            'nombre' => 'SEDE HEC (Hospital El Cruce)',
            'calleynum' => 'Felix Lope De Vega y Calle 141',
            'localidad' => 'Florencio Varela',

        ]);
        Sede::create([

            'nombre' => 'SEDE CUB (Centro Universitario Berazategui)',
            'calleynum' => 'Diagonal Obispo J. Novak 4501',
            'localidad' => 'Berazategui',

        ]);
        
    }
}
