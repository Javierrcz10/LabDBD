<?php

namespace Database\Factories;

use App\Models\Boleta;
use App\Models\MetodoPago;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoletaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Boleta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'precioTotal'=> $this->faker->numberBetween($min = 1000, $max = 15000),
            'fecha' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
            'estado' => $this->faker->boolean(100),
            'idPago' => MetodoPago::all()->random()->id
        ];
    }
}
