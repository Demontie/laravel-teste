<?php

use Faker\Generator as Faker;

$factory->define(\App\Alunos::class, function (Faker $faker) {
    $arraystatus = array_rand(array("matriculado", "trancado", "jubilado"));
    $valor = $arraystatus[0];
    return [
    'nome_aluno' => $faker->name,
    'numero_maricula' => rand(),
    'semestre' => rand(1,2),
    'status' => $valor,
    'curso' => function () {
            return factory(\App\Cursos::class)->create()->id;
        }
    ];
});
