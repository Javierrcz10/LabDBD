<?php

namespace Database\Factories;

use App\Models\Boleta;
use App\Models\Comentario;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comentario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contenido' =>$this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'calificacion' =>$this->faker->numberBetween($min = 1, $max = 5),
            'idBoleta' => Boleta::factory()
        ];
    }
}
