<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    use HasFactory;

    public function usuarioBoleta()
    {
        return $this->hasMany(UsuarioBoleta::class);

    }

    public function boletaProducto()
    {
        return $this->hasMany(BoletaProducto::class);

    }

    public function comentario()
    {
        return $this->hasMany(Comentario::class);

    }

    public function metodoPago()
    {
        return $this->belongsTo(MetodoPago::class);

    }

}
