<?php

use Faker\Generator as Faker;

$factory->define(\App\Alunos::class, function (Faker $faker) {
    return [


    'nome_aluno' => $faker->name,
    'numero_maricula' => rand(),
    'semestre' => rand(1,2),
    'status' => array_rand(array("matriculado", "trancado", "jubilado")),
    'curso' => function () {
            return factory(\App\Cursos::class)->create()->id;
        }
    ];
});
