<?php

use Faker\Generator as Faker;

$factory->define(\App\Alunos::class, function (Faker $faker) {
    return [
        'curso' => function () {
            return factory(\App\Cursos::class)->create()->id;
        }
    ];
});
