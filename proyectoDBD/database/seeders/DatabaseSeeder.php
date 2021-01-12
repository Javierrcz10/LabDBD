<?php

namespace Database\Seeders;

use \App\Models\Usuario;
use \App\Models\UsuarioProducto;
use \App\Models\Producto;
use \App\Models\Boleta;
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
        Usuario::factory(10)->create();
        Producto::factory(10)->create();
        Feria::factory(10)->create();
        Boleta::factory(10)->create();
        Calle::factory(10)->create();
        Categoria::factory(10)->create();
        Comentario::factory(10)->create();
        Comuna::factory(10)->create();
        Feria::factory(10)->create();
        MetodoPago::factory(10)->create();
        Permiso::factory(10)->create();
        PuestoFeria::factory(10)->create();
        Region::factory(10)->create();
        Rol::factory(10)->create();
        RolPermiso::factory(10)->create();
        SubCategoria::factory(10)->create();
        Ubicacion::factory(10)->create();
        UbicacionFeria::factory(10)->create();
        UbicacionUsuario::factory(10)->create();
        UnidadMedida::factory(10)->create();
        UsuarioBoleta::factory(10)->create();
        UsuarioComentario::factory(10)->create();
        UsuarioPuesto::factory(10)->create();
        UsuarioRol::factory(10)->create();
        ProductoPuesto::factory(10)->create();
    }
}
