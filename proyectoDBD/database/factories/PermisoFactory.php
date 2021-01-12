<?php

namespace Database\Factories;

use App\Models\Permiso;
use Illuminate\Database\Eloquent\Factories\Factory;

class PermisoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Permiso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombrePermiso' =>$this->faker->randomElement($array = array ('Borrar usuario','Borrar Feria','Comprar Productos', 'Borrar Comentario')),
            'descripcionPermiso' =>$this->faker->text
        ];
    }
}
