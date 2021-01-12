<?php

namespace Database\Seeders;

use \App\Models\Usuario;
use \App\Models\UsuarioProducto;
use \App\Models\Producto;
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
        //UsuarioProducto::factory(10)->create();
    }
}
