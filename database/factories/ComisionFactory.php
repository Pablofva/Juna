<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comision;
use Faker\Generator as Faker;


$factory->define(Comision::class, function (Faker $faker) {
    $dias = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
    $horarios = [
        ($faker->numberBetween(8, 9).': 00 a '. $faker->numberBetween(10, 13).': 00 '),
        ($faker->numberBetween(14, 15) . ':00 a ' . $faker->numberBetween(16, 19) . ':00'),
        ($faker->numberBetween(19, 20) . ':00 a ' . $faker->numberBetween(21, 22) . ':00'),
    ];
    return [
        //
        'nombre' => 'Comision ' . $faker->numberBetween(1, 17),
        'horario' => array_random($horarios),
        'dia' => array_random($dias),
<<<<<<< HEAD
        'materia_id' => $faker->numberBetween(1,393),
=======
        'materia_id' => $faker->numberBetween(1,46),
>>>>>>> Alex1
        'aula_id' => $faker->numberBetween(1, 79),
    ];
});

