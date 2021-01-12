<?php

namespace Database\Factories;

use App\Models\Comuna;
use App\Models\Calle;
use Illuminate\Database\Eloquent\Factories\Factory;

class CalleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Calle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreCalle' => $this->faker->streetName,
            'idComuna' => Comuna::all()->random()->id
        ];
    }
}
