<?php

namespace Database\Factories;

use App\Models\PuestoFeria;
use App\Models\Producto;
use App\Models\ProductoPuesto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoPuestoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductoPuesto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cantidad' =>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 500),
            'idProducto' => Producto::all()->random()->id,
            'idPuesto' => PuestoFeria::all()->random()->id
        ];
    }
}
