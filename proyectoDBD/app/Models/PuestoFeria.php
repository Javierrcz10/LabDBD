<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuestoFeria extends Model
{
    use HasFactory;

    public function feria()
    {
        return $this->belongsTo(Feria::class);

    }

    public function usuarioPuesto()
    {
        return $this->hasMany(UsuarioPuesto::class);

    }

   

    public function productoPuesto()
    {
        return $this->hasMany(ProductoPuesto::class);

    }
}
