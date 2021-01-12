<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    public function boleta()
    {
        return $this->belongsTo(Boleta::class);

    }

    public function usuarioComentario()
    {
        return $this->hasMany(UsuarioComentario::class);

    }
}
