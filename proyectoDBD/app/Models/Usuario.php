<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;


    public function usuarioPuesto()
    {
        return $this->hasMany(UsuarioPuesto::class);

    }

    public function usuarioRol()
    {
        return $this->hasMany(UsuarioRol::class);

    }

    public function ubicacionUsuario()
    {
        return $this->hasMany(UbicacionUsuario::class);

    }

    public function usuarioComentario()
    {
        return $this->hasMany(UsuarioComentario::class);

    }

    public function metodoPago()
    {
        return $this->hasMany(MetodoPago::class);

    }

    public function usuarioBoleta()
    {
        return $this->hasMany(UsuarioBoleta::class);

    }

    public function usuarioProducto()
    {
        return $this->hasMany(UsuarioProducto::class);

    }
}
