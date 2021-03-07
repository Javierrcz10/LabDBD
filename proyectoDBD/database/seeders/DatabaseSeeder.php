<?php

namespace Database\Seeders;

use \App\Models\Usuario;
use \App\Models\UsuarioProducto;
use \App\Models\Producto;
use \App\Models\Boleta;
use \App\Models\BoletaProducto;
use \App\Models\Calle;
use \App\Models\Categoria;
use \App\Models\Comentario;
use \App\Models\Comuna;
use \App\Models\Feria;
use \App\Models\MetodoPago;
use \App\Models\Permiso;
use \App\Models\ProductoPuesto;
use \App\Models\PuestoFeria;
use \App\Models\Region;
use \App\Models\Rol;
use \App\Models\RolPermiso;
use \App\Models\SubCategoria;
use \App\Models\Ubicacion;
use \App\Models\UbicacionFeria;
use \App\Models\UbicacionUsuario;
use \App\Models\UnidadMedida;
use \App\Models\UsuarioBoleta;
use \App\Models\UsuarioComentario;
use \App\Models\UsuarioPuesto;
use \App\Models\UsuarioRol;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Feria::factory(30)->create();
        Rol::factory(10)->create();
        Permiso::factory(10)->create();
        UnidadMedida::factory(10)->create();
        Usuario::factory(30)->create();
        Region::factory(10)->create();
        Categoria::factory(10)->create();
        SubCategoria::factory(10)->create();
        Producto::factory(30)->create();
        RolPermiso::factory(30)->create();
        UsuarioProducto::factory(30)->create();
        UsuarioRol::factory(30)->create();
        Comuna::factory(10)->create();
        Calle::factory(15)->create();
        Ubicacion::factory(30)->create();
        UbicacionFeria::factory(30)->create();
        UbicacionUsuario::factory(30)->create();
        MetodoPago::factory(30)->create();
        Boleta::factory(30)->create();
        UsuarioBoleta::factory(30)->create();
        Comentario::factory(30)->create();
        BoletaProducto::factory(30)->create();
        UsuarioComentario::factory(30)->create();
        PuestoFeria::factory(30)->create();
        UsuarioPuesto::factory(30)->create();
        ProductoPuesto::factory(30)->create();
    }
}
