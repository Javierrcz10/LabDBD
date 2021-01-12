<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreUsuario'=> $this->faker->name,
            'apodoUsuario'=> $this->faker->firstname,
            'contraseniaUsuario'=> $this->faker->password,
            'emailUsuario'=> $this->faker->email,
            'reputacionUsuario'=> $this->faker->numberBetween($min = 1, $max = 5)
        ];
    }
}
