<?php

namespace Database\Factories;

use App\Models\Comuna;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComunaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comuna::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreComuna' =>$this->faker->randomElement($array = array ('San Miguel','Providencia','Pedro Aguirre Cerda','Cerro Navia','Las Condes','Vitacura','Renca')),
        ];
    }
}
