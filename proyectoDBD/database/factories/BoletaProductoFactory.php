<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Boleta;
use App\Models\BoletaProducto;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoletaProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BoletaProducto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idBoleta' =>Boleta::factory(),
            'idProducto' =>Producto::factory()
        ];
    }
}
