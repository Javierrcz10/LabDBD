<?php

namespace Database\Factories;

use App\Models\Calle;
use App\Models\Ubicacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class UbicacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ubicacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numerodireccion'=> $this->faker->numberBetween($min = 0, $max = 9999),
            'idCalle'=> Calle::factory()
        ];
    }
}
