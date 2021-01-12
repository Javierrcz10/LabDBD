<?php

namespace Database\Factories;

use App\Models\Ubicacion;
use App\Models\Feria;
use App\Models\UbicacionFeria;
use Illuminate\Database\Eloquent\Factories\Factory;

class UbicacionFeriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UbicacionFeria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idUbicacion'=> Ubicacion::all()->random()->id,
            'idFeria'=> Feria::all()->random()->id
        ];
    }
}
