<?php

namespace Database\Factories;

use App\Models\Usuario;
use App\Models\PuestoFeria;
use App\Models\UsuarioPuesto;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioPuestoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsuarioPuesto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idUsuario'=> Usuario::all()->random()->id,
            'idPuesto'=> PuestoFeria::all()->random()->id
        ];
    }
}
