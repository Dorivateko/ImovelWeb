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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rotas da tabela corretores

Route::get('/corretores','CorretorController@index') ->name ('corretores.index');
Route::get('/proprietarios','ProprietariosController@index') ->name ('proprietarios.index');
Route::get('/imoveis','ImoveisController@index') ->name ('imoveis.index');
Route::get('/alugueis','AlugueisController@index') ->name ('alugueis.index');