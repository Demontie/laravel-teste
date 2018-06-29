<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('cursos')->insert([
            'cod_curso'  => '123456',
            'nome_curso' => 'Curso de pedagogia',
            'instituicao_ensino' => 'Faculdade alguma coisa'
        ]);
        DB::table('alunos')->insert([
            'nome_aluno'  => '123456',
            'curso' => 1,
            'numero_maricula' => 'Faculdade alguma coisa',
            'semestre' => 'Faculdade alguma coisa',
            'status' => 'matriculado'
        ]);
    }
}
