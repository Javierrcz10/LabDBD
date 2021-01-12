<?php

namespace Database\Factories;

use App\Models\Rol;
use App\Models\Permiso;
use App\Models\RolPermiso;
use Illuminate\Database\Eloquent\Factories\Factory;

class RolPermisoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RolPermiso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idRol'=> Rol::all()->random()->id,
            'idPermiso'=> Permiso::all()->random()->id
        ];
    }
}
