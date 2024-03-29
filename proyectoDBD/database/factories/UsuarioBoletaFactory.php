<?php

namespace Database\Factories;

use App\Models\Usuario;
use App\Models\Boleta;
use App\Models\UsuarioBoleta;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioBoletaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsuarioBoleta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idUsuario'=> Usuario::all()->random()->id,
            'idBoleta'=> Boleta::all()->random()->id
        ];
    }
}
