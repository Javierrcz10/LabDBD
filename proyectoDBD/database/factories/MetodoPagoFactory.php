<?php

namespace Database\Factories;

use App\Models\MetodoPago;
use Illuminate\Database\Eloquent\Factories\Factory;

class MetodoPagoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MetodoPago::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipoPago' =>$this->faker->randomElement($array = array ('Credito','Debito','Efectivo','Paypal')),
            'totalPago' =>$this->faker->numberBetween($min = 1000, $max = 35000),
            'nombreBanco' =>$this->faker->randomElement($array = array ('Banco Estado','Banco Santander','Banco Falabella')),
            'ultimosDigitos' =>$this->faker->numberBetween($min = 1000, $max = 9999),
        ];
    }
}
