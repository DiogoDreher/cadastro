<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

//ROTAS DE PRODUTOS

//GETS

Route::get('/produtos', 'App\Http\Controllers\ControladorProduto@index');

Route::get('/produtos/novo', 'App\Http\Controllers\ControladorProduto@create');

Route::get('/produtos/editar/{id}', 'App\Http\Controllers\ControladorProduto@edit');

Route::get('/produtos/apagar/{id}', 'App\Http\Controllers\ControladorProduto@destroy');

//POTS

Route::post('/produtos', 'App\Http\Controllers\ControladorProduto@store');

Route::post('/produtos/{id}', 'App\Http\Controllers\ControladorProduto@update');


//ROTAS DE CATEGORIAS

//GETS

Route::get('/categorias', 'App\Http\Controllers\ControladorCategoria@index');

Route::get('/categorias/novo', 'App\Http\Controllers\ControladorCategoria@create');

Route::get('/categorias/apagar/{id}', 'App\Http\Controllers\ControladorCategoria@destroy');

Route::get('/categorias/editar/{id}', 'App\Http\Controllers\ControladorCategoria@edit');

//POSTS

Route::post('/categorias', 'App\Http\Controllers\ControladorCategoria@store');

Route::post('/categorias/{id}', 'App\Http\Controllers\ControladorCategoria@update');
