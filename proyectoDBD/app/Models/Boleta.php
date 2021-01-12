<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    use HasFactory;

    public function usuarioBoleta()
    {
        return
        $this->hasMany('App\Models\UsuarioBoleta');

    }

    public function boletaProducto()
    {
        return
        $this->hasMany('App\Models\BoletaProducto');

    }

    public function comentario()
    {
        return
        $this->hasMany('App\Models\Comentario');

    }

    public function metodoPago()
    {
        return
        $this->belongsTo('App\Models\MetodoPago');

    }

}
