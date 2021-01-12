<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calle extends Model
{
    use HasFactory;

    public function comuna()
    {
        return $this->belongsTo(Comuna::class);

    }

    public function ubicacion()
    {
        return $this->hasMany(Ubicacion::class);

    }
}
