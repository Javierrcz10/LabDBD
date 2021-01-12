<?php

namespace Database\Factories;

use App\Models\Ubicacion;
use App\Models\Usuario;
use App\Models\UbicacionUsuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UbicacionUsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UbicacionUsuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idUbicacion'=> Ubicacion::factory(),
            'idUsuario'=> Usuario::factory()
        ];
    }
}
