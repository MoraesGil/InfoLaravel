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

Route::get('/helloworld',function(){
  return "ola mundo";
});

Route::get('oicontroller/{parametro}','HelloController@index');


// ROTAS
Route::get('/contatos','ContatoController@index');//list
Route::get('/contato/novo','ContatoController@create');//form
Route::post('/contato/novo','ContatoController@store');//grava
Route::get('/contato/{id}/editar','ContatoController@edit');//form
Route::put('/contato/{id}/editar','ContatoController@update');//grava
Route::get('/contato/{id}/excluir','ContatoController@destroy');//func
