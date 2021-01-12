<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;

    public function calle()
    {
        return $this->belongsTo(Calle::class);

    }

    public function ubicacionFeria()
    {
        return $this->hasMany(UbicacionFeria::class);

    }

    

    public function ubicacionUsuario()
    {
        return $this->hasMany(UbicacionUsuario::class);

    }
}
