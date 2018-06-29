<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => '/','uses' => 'CursosController@index']);

//Route::get('form_aluno', ['as' => 'form_aluno','uses' => 'AlunosController@create']);
//Route::get('form_curso', ['as' => 'form_curso','uses' => 'CursosController@create']);


//Route::get('edit/form_curso')->uses('CursosController@create')->name('edit.form_curso');
//Route::delete('excluir/curso')->uses('CursosController@destroy')->name('excluir.curso');
//Route::get('edit/form_aluno')->uses('AlunosController@create')->name('edit.form_aluno');
//Route::delete('excluir/aluno')->uses('AlunosController@destroy')->name('excluir.aluno');
//Route::post('cadastrar/curso')->uses('CursosController@store')->name('cadastrar.curso');
Route::resource('cursos', 'CursosController');
Route::resource('alunos', 'AlunosController');
//Route::put('/atualizarDadosBasicos', ['as' => 'cliente.informacoes.atualizarDadosBasicos', 'uses' => 'Usuarios\UsuariosClientesController@atualizarDadosBasicos'])->middleware('auth', 'sessao_unica', 'usuario_ativo', 'language');
//Route::post('cadastrar_cliente/cliente/cadastro', ['as' => 'cliente.cadastro',  'uses' => 'Usuarios\UsuariosClientesController@novoUsuario']);