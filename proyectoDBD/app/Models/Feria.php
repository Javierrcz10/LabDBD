<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feria extends Model
{
    use HasFactory;

    public function ubicacionFeria()
    {
        return $this->hasMany(UbicacionFeria::class);

    }

    public function puestoFeria()
    {
        return $this->hasMany(PuestoFeria::class);

    }
}
