<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UbicacionUsuario extends Model
{
    use HasFactory;

    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class);

    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);

    }

}
