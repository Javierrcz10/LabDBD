<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioComentario extends Model
{
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);

    }
    public function comentario()
    {
        return $this->belongsTo(Comentario::class);

    }
}
