<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $table = 'alunos';

    // Aqui está o relacionamento
    public function cursos(){
        return $this->hasMany('App\Cursos');
    }
}
