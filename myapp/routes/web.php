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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lista-proj-mem', 'AlocacaoController@painel')->name('lista');
Route::get('/lista-proj-mem/alocacao', 'AlocacaoController@viewAlocacao')->name('view.alocacao');
Route::post('/lista-proj-mem/salvar-alocacao', 'AlocacaoController@salvarAlocacao')->name('salvar.alocacao');
Route::get('/lista-proj-mem/editar/{id}', 'AlocacaoController@viewEdicao')->name('view.edicao');
Route::post('/lista-proj-mem/editar/salvar', 'AlocacaoController@salvarEdicao')->name('salvar.edicao');
Route::get('/lista-proj-mem/deletar/{id}', 'AlocacaoController@deletarMembro')->name('deletar.membro');