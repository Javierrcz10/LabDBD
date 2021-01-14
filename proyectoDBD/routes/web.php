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

/*  rutas de index*/

Route::get('/boletas','BoletaController@index');
Route::get('/boletaProductos','BoletaProductoController@index');
Route::get('/calles','CalleController@index');
Route::get('/categorias','CategoriaController@index');
Route::get('/comentarios','ComentarioController@index');
Route::get('/comunas','ComunaController@index');
Route::get('/ferias','FeriaController@index');
Route::get('/metodosDePago','MetodoPagoController@index');
Route::get('/permisos','PermisoController@index');
Route::get('/productos','ProductoController@index');
Route::get('/productosPuestos','ProductoPuestoController@index');
Route::get('/regiones','RegionController@index');
Route::get('/roles','RolController@index');
Route::get('/rolPermisos','RolPermisoController@index');
Route::get('/subCategorias','SubCategoriaController@index');
Route::get('/ubicaciones','UbicacionController@index');
Route::get('/ubicacionFerias','UbicacionFeriaController@index');
Route::get('/ubicacionUsuarios','UbicacionUsuarioController@index');
Route::get('/unidadMedidas','UnidadMedidaController@index');
Route::get('/usuarioBoletas','UsuarioBoletaController@index');
Route::get('/usuarioComentarios','UsuarioComentarioController@index');
Route::get('/usuarios','UsuarioController@index');
Route::get('/usuarioProductos','UsuarioProductoController@index');
Route::get('/usuarioPuestos','UsuarioPuestoController@index');
Route::get('/usuarioRols','UsuarioRolController@index');



/*  rutas de show*/

Route::get('/boletas/{id}','BoletaController@show');
Route::get('/boletaProductos/{id}','BoletaProductoController@show');
Route::get('/calles/{id}','CalleController@show');
Route::get('/categorias/{id}','CategoriaController@show');
Route::get('/comentarios/{id}','ComentarioController@show');
Route::get('/comunas/{id}','ComunaController@show');
Route::get('/ferias/{id}','FeriaController@show');
Route::get('/metodosDePago/{id}','MetodoPagoController@show');
Route::get('/permisos/{id}','PermisoController@show');
Route::get('/productos/{id}','ProductoController@show');
Route::get('/productosPuestos/{id}','ProductoPuestoController@show');
Route::get('/regiones/{id}','RegionController@show');
Route::get('/roles/{id}','RolController@show');
Route::get('/rolPermisos/{id}','RolPermisoController@show');
Route::get('/subCategorias/{id}','SubCategoriaController@show');
Route::get('/ubicaciones/{id}','UbicacionController@show');
Route::get('/ubicacionFerias/{id}','UbicacionFeriaController@show');
Route::get('/ubicacionUsuarios/{id}','UbicacionUsuarioController@show');
Route::get('/unidadMedidas/{id}','UnidadMedidaController@show');
Route::get('/usuarioBoletas/{id}','UsuarioBoletaController@show');
Route::get('/usuarioComentarios/{id}','UsuarioComentarioController@show');
Route::get('/usuarios/{id}','UsuarioController@show');
Route::get('/usuarioProductos/{id}','UsuarioProductoController@show');
Route::get('/usuarioPuestos/{id}','UsuarioPuestoController@show');
Route::get('/usuarioRols/{id}','UsuarioRolController@show');


/*  rutas de store*/

Route::post('/boletas/create','BoletaController@store');
Route::post('/boletaProductos/create','BoletaProductoController@store');
Route::post('/calles/create','CalleController@store');
Route::post('/categorias/create','CategoriaController@store');
Route::post('/comentarios/create','ComentarioController@store');
Route::post('/comunas/create','ComunaController@store');
Route::post('/ferias/create','FeriaController@store');
Route::post('/metodosDePago/create','MetodoPagoController@store');
Route::post('/permisos/create','PermisoController@store');
Route::post('/productos/create','ProductoController@store');
Route::post('/productosPuestos/create','ProductoPuestoController@store');
Route::post('/regiones/create','RegionController@store');
Route::post('/roles/create','RolController@store');
Route::post('/rolPermisos/create','RolPermisoController@store');
Route::post('/subCategorias/create','SubCategoriaController@store');
Route::post('/ubicaciones/create','UbicacionController@store');
Route::post('/ubicacionFerias/create','UbicacionFeriaController@store');
Route::post('/ubicacionUsuarios/create','UbicacionUsuarioController@store');
Route::post('/unidadMedidas/create','UnidadMedidaController@store');
Route::post('/usuarioBoletas/create','UsuarioBoletaController@store');
Route::post('/usuarioComentarios/create','UsuarioComentarioController@store');
Route::post('/usuarios/create','UsuarioController@store');
Route::post('/usuarioProductos/create','UsuarioProductoController@store');
Route::post('/usuarioPuestos/create','UsuarioPuestoController@store');
Route::post('/usuarioRols/create','UsuarioRolController@store');