<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UbicacionFeria extends Model
{
    use HasFactory;

    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class);

    }

    public function feria()
    {
        return $this->belongsTo(Feria::class);

    }

}
