<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $fillable = ['cod_curso','nome_curso','instituicao_ensino'];
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $table = 'cursos';
}
