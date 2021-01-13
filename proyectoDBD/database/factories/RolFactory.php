<?php

namespace Database\Factories;

use App\Models\Rol;
use Illuminate\Database\Eloquent\Factories\Factory;

class RolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rol::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreRol'=> $this->faker->randomElement($array = array (
                'admin','vendedor','ayudante','comprador','reponedor')),
            'estado' => $this->faker->boolean(100),
            'descripcionRol'=> $this->faker->realText
        ];
    }
}
