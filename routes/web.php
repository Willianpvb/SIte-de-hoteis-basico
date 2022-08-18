<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'App\Http\Controllers\EntrarController@index');


Route::get('/home', 'App\Http\Controllers\HomeController@index')
->name('principal');

Route::get('/quem_somos', 'App\Http\Controllers\QSController@index');

Route::get('/corretores', 'App\Http\Controllers\CorretoresController@index');

Route::get('/contato', 'App\Http\Controllers\ContatoController@index');

Route::post('/contato', 'App\Http\Controllers\ContatoController@store');

Route::post('/home/criar', 'App\Http\Controllers\HomeController@store');

Route::get('/home/criar', 'App\Http\Controllers\HomeController@criar')
 ->name('criar_imovel');

Route::get('/entrar', 'App\Http\Controllers\EntrarController@index');

Route::get('/registrar', 'App\Http\Controllers\RegistrarController@create');

Route::post('/entrar', 'App\Http\Controllers\EntrarController@entrar');

Route::get('/registrarCorretor', 'App\Http\Controllers\CorretoresController@create');

Route::post('/registrar', 'App\Http\Controllers\RegistrarController@store');

Route::post('/registrarCorretor', 'App\Http\Controllers\CorretoresController@store');


Route::get('/sair', 'App\Http\Controllers\SairController@sair');