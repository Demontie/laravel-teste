<?php

use Faker\Generator as Faker;

$factory->define(\App\Cursos::class, function (Faker $faker) {
    return [
        'nome_curso' => $faker->name,
        'instituicao_ensino' => $faker->name,
        'cod_curso' => rand(),
    ];
});
