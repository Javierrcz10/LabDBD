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
    return view('inicio');
});

Route::get('/uwu', function () {
    return view('welcome');
});

Route::get('/inicio2/{id}', function ($id) {
    return view('inicio2')->with('id', $id);
});

Route::get('/producto', function () {
    return view('producto',['id' => 10]);
});

Route::get('/filtroComuna','PuestoFeriaController@filtrarPuestos');

Route::get('/filtrarProducto','ProductoController@index');

Route::get('/crearProducto/{id}', function ($id) {
    return view('crearProducto')->with('id', $id);
});
Route::get('/productosPuesto','ProductoPuestoController@index');

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/carritoCompra/{id}', function ($id) {
    return view('carritoCompra')->with('id', $id);
});

Route::get('/inicioSesion', function () {
    return view('inicioSesion');
});

Route::get('/metodoPago/{id}', function ($id) {
    return view('metodoPago')->with('id', $id);
});

Route::get('/editarPerfil/{id}', 'UsuarioController@editar');
/*  rutas de index*/

Route::get('/boletas','BoletaController@index');
Route::get('/boletaProductos','BoletaProductoController@index');
Route::get('/calles','CalleController@index');
Route::get('/categorias','CategoriaController@index');
Route::get('/comentarios','ComentarioController@index');
//Route::get('/comunas','ComunaController@index');
Route::get('/ferias','FeriaController@index');
Route::get('/metodosDePago','MetodoPagoController@index');
Route::get('/permisos','PermisoController@index');
Route::get('/productos','ProductoController@index');
Route::get('/puestosFerias','PuestoFeriaController@index');
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
Route::get('/puestosFerias/{id}','PuestoFeriaController@show');
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
Route::get('/usuarios','UsuarioController@show2')->name('usuarioSesion');

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
Route::post('/productos/create/{id}','ProductoController@store')->name('productoStore');
Route::post('/productosPuestos/create','ProductoPuestoController@store');
Route::post('/puestosFerias/create','PuestoFeriaController@store');
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
Route::post('/usuarios/create','UsuarioController@store')->name('usuarioStore');
Route::post('/usuarioProductos/create','UsuarioProductoController@store');
Route::post('/usuarioPuestos/create','UsuarioPuestoController@store');
Route::post('/usuarioRols/create','UsuarioRolController@store')->name('usuarioRolStore');


/* rutas de update*/

Route::put('/boletas/update/{id}','BoletaController@update');
Route::put('/boletaProductos/update/{id}','BoletaProductoController@update');
Route::put('/calles/update/{id}','CalleController@update');
Route::put('/categorias/update/{id}','CategoriaController@update');
Route::put('/comentarios/update/{id}','ComentarioController@update');
Route::put('/comunas/update/{id}','ComunaController@update');
Route::put('/ferias/update/{id}','FeriaController@update');
Route::put('/metodosDePago/update/{id}','MetodoPagoController@update');
Route::put('/permisos/update/{id}','PermisoController@update');
Route::put('/productos/update/{id}','ProductoController@update');
Route::put('/productosPuestos/update/{id}','ProductoPuestoController@update');
Route::put('/puestosFerias/update/{id}','PuestoFeriaController@update');
Route::put('/regiones/update/{id}','RegionController@update');
Route::put('/roles/update/{id}','RolController@update');
Route::put('/rolPermisos/update/{id}','RolPermisoController@update');
Route::put('/subCategorias/update/{id}','SubCategoriaController@update');
Route::put('/ubicaciones/update/{id}','UbicacionController@update');
Route::put('/ubicacionFerias/update/{id}','UbicacionFeriaController@update');
Route::put('/ubicacionUsuarios/update/{id}','UbicacionUsuarioController@update');
Route::put('/unidadMedidas/update/{id}','UnidadMedidaController@update');
Route::put('/usuarioBoletas/update/{id}','UsuarioBoletaController@update');
Route::put('/usuarioComentarios/update/{id}','UsuarioComentarioController@update');
Route::put('/usuarios/update/{id}','UsuarioController@update')->name('usuarioUpdate');
Route::put('/usuarioProductos/update/{id}','UsuarioProductoController@update');
Route::put('/usuarioPuestos/update/{id}','UsuarioPuestoController@update');
Route::put('/usuarioRols/update/{id}','UsuarioRolController@update');


/* rutas de destroy*/


Route::delete('/boletas/delete/{id}','BoletaController@destroy');
Route::delete('/boletaProductos/delete/{id}','BoletaProductoController@destroy');
Route::delete('/calles/delete/{id}','CalleController@destroy');
Route::delete('/categorias/delete/{id}','CategoriaController@destroy');
Route::delete('/comentarios/delete/{id}','ComentarioController@destroy');
Route::delete('/comunas/delete/{id}','ComunaController@destroy');
Route::delete('/ferias/delete/{id}','FeriaController@destroy');
Route::delete('/metodosDePago/delete/{id}','MetodoPagoController@destroy');
Route::delete('/permisos/delete/{id}','PermisoController@destroy');
Route::delete('/productos/delete/{id}','ProductoController@destroy');
Route::delete('/productosPuestos/delete/{id}','ProductoPuestoController@destroy');
Route::delete('/puestosFerias/delete/{id}','PuestoFeriaController@destroy');
Route::delete('/regiones/delete/{id}','RegionController@destroy');
Route::delete('/roles/delete/{id}','RolController@destroy');
Route::delete('/rolPermisos/delete/{id}','RolPermisoController@destroy');
Route::delete('/subCategorias/delete/{id}','SubCategoriaController@destroy');
Route::delete('/ubicaciones/delete/{id}','UbicacionController@destroy');
Route::delete('/ubicacionFerias/delete/{id}','UbicacionFeriaController@destroy');
Route::delete('/ubicacionUsuarios/delete/{id}','UbicacionUsuarioController@destroy');
Route::delete('/unidadMedidas/delete/{id}','UnidadMedidaController@destroy');
Route::delete('/usuarioBoletas/delete/{id}','UsuarioBoletaController@destroy');
Route::delete('/usuarioComentarios/delete/{id}','UsuarioComentarioController@destroy');
Route::delete('/usuarios/delete/{id}','UsuarioController@destroy');
Route::delete('/usuarioProductos/delete/{id}','UsuarioProductoController@destroy');
Route::delete('/usuarioPuestos/delete/{id}','UsuarioPuestoController@destroy');
Route::delete('/usuarioRols/delete/{id}','UsuarioRolController@destroy');

/*rutas de softdestroy*/

Route::delete('/boletas/softdelete/{id}','BoletaController@softdestroy');
Route::delete('/calles/softdelete/{id}','CalleController@softdestroy');
Route::delete('/categorias/softdelete/{id}','CategoriaController@softdestroy');
Route::delete('/comentarios/softdelete/{id}','ComentarioController@softdestroy');
Route::delete('/comunas/softdelete/{id}','ComunaController@softdestroy');
Route::delete('/ferias/softdelete/{id}','FeriaController@softdestroy');
Route::delete('/metodosDePago/softdelete/{id}','MetodoPagoController@softdestroy');
Route::delete('/permisos/softdelete/{id}','PermisoController@softdestroy');
Route::delete('/productos/softdelete/{id}','ProductoController@softdestroy');
Route::delete('/productosPuestos/softdelete/{id}','ProductoPuestoController@softdestroy');
Route::delete('/puestosFerias/softdelete/{id}','PuestoFeriaController@softdestroy');
Route::delete('/regiones/softdelete/{id}','RegionController@softdestroy');
Route::delete('/roles/softdelete/{id}','RolController@softdestroy');
Route::delete('/subCategorias/softdelete/{id}','SubCategoriaController@softdestroy');
Route::delete('/ubicaciones/softdelete/{id}','UbicacionController@softdestroy');
Route::delete('/unidadMedidas/softdelete/{id}','UnidadMedidaController@softdestroy');
Route::delete('/usuarios/softdelete/{id}','UsuarioController@softdestroy');
