<?php

namespace Database\Factories;
use App\Models\Categoria;
use App\Models\SubCategoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubCategoriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubCategoria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreCategoria'=> $this->faker->randomElement($array = array (
                'manzanas','ajedrez','duraznos','escobillones','pisos','muebles')),
            'idCategoria' =>Categoria::all()->random()->id,
            'estado' => $this->faker->boolean(100)
        ];
    }
}
