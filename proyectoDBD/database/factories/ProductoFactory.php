<?php

namespace Database\Factories;

use App\Models\SubCategoria;
use App\Models\UnidadMedida;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreProducto' =>$this->faker->name,
            'descripcionProducto' =>$this->faker->text,
            'precioProducto' =>$this->faker->numberBetween($min = 100, $max = 9000),
            'idSubCategoria'=> SubCategoria::factory(),
            'idUnidad'=> UnidadMedida::factory()
        ];
    }
}
