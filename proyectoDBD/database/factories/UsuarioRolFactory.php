<?php

namespace Database\Factories;

use App\Models\Usuario;
use App\Models\Rol;
use App\Models\UsuarioRol;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioRolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsuarioRol::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idUsuario'=> Usuario::all()->random()->id,
            'idRol'=> Rol::all()->random()->id
        ];
    }
}
