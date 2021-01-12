<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

   

    public function usuarioRol()
    {
        return $this->hasMany(UsuarioRol::class);

    }


    public function rolPermiso()
    {
        return $this->hasMany(RolPermiso::class);

    }
}
