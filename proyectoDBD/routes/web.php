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
    return view('welcome');
});

Route::get('/boletas','BoletaController@index');
Route::get('/boletaProductos','BoletaProductoController@index');
Route::get('/calles','CalleController@index');
Route::get('/categorias','CategoriaController@index');
Route::get('/comentarios','ComentarioController@index');
Route::get('/comunas','ComunaController@index');
Route::get('/ferias','FeriaController@index');
Route::get('/metodosDePago','MetodoPagoController@index');



/*  hasta aca index*/

Route::get('/boletas/{id}','BoletaController@show');
Route::get('/boletaProductos{id}','BoletaProductoController@show');
Route::get('/calles{id}','CalleController@show');
Route::get('/categorias{id}','CategoriaController@show');
Route::get('/comentarios{id}','ComentarioController@show');
Route::get('/comunas{id}','ComunaController@show');
Route::get('/ferias{id}','FeriaController@show');
Route::get('/metodosDePago{id}','MetodoPagoController@show');


/* hasta aca show */