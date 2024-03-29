<?php

namespace Database\Factories;

use App\Models\UnidadMedida;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnidadMedidaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UnidadMedida::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipoUnidad'=> $this->faker->randomElement($array = array (
                'Metros','Kilos','Gramos','Unidades','Litros')),
            'estado' => $this->faker->boolean(100),
            
        ];
    }
}
