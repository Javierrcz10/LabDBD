<?php

namespace Database\Factories;

use App\Models\Usuario;
use App\Models\Comentario;
use App\Models\UsuarioComentario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioComentarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsuarioComentario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idUsuario'=> Usuario::all()->random()->id,
            'idComentario'=> Comentario::all()->random()->id
        ];
    }
}
