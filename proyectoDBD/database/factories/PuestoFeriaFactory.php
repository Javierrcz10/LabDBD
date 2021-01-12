<?php

namespace Database\Factories;

use App\Models\PuestoFeria;
use App\Models\Feria;
use Illuminate\Database\Eloquent\Factories\Factory;

class PuestoFeriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PuestoFeria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NombrePuesto' =>$this->faker->company,
            'DescripcionPuesto' =>$this->faker->text,
            'idFeria' =>Feria::factory()
        ];
    }
}
