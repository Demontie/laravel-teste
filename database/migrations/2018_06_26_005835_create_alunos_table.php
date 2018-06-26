<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_aluno');
            $table->integer('curso');            
            $table->integer('numero_maricula');            
            $table->integer('semestre');        
            $table->enum('status', ['matriculado', 'trancado','jubilado']);
            $table->foreign('curso')->references('id')->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->dropForeign('curso ');
        });
        Schema::dropIfExists('alunos');
    }
}
