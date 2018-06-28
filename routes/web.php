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

Route::get('form_aluno', ['as' => 'form_aluno','uses' => 'AlunosController@create']);
//Route::put('/atualizarDadosBasicos', ['as' => 'cliente.informacoes.atualizarDadosBasicos', 'uses' => 'Usuarios\UsuariosClientesController@atualizarDadosBasicos'])->middleware('auth', 'sessao_unica', 'usuario_ativo', 'language');
//Route::post('cadastrar_cliente/cliente/cadastro', ['as' => 'cliente.cadastro',  'uses' => 'Usuarios\UsuariosClientesController@novoUsuario']);