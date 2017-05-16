<?php
// ROTAS
// Route::get('/contatos','ContatoController@index');
// Route::get('/contato/novo','ContatoController@create');
// Route::post('/contato/novo','ContatoController@store');
// Route::get('/contato/{id}/editar','ContatoController@edit');
// Route::put('/contato/{id}/editar','ContatoController@update');
// Route::get('/contato/{id}/excluir','ContatoController@destroy');

// ROTAS NOMEADAS
Route::get('/contatos',['as'=>'contato.index','uses'=>'ContatoController@index')];
Route::get('/contato/novo',['as'=>'contato.create','uses'=>'ContatoController@create']);
Route::post('/contato/novo',['as'=>'contato.store','uses'=>'ContatoController@store']);
Route::get('/contato/{id}/editar',['as'=>'contato.edit','uses'=>'ContatoController@edit']);
Route::put('/contato/{id}/editar',['as'=>'contato.update','uses'=>'ContatoController@update']);
Route::get('/contato/{id}/excluir',['as'=>'contato.destroy','uses'=>'ContatoController@destroy']);

// route resource equivalente ao cod a cima
// Route::resource('photos', 'PhotoController',['except' => [
//     'show'
// ]]);
