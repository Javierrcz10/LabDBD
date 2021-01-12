<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function unidadMedida()
    {
        return $this->belongsTo(UnidadMedida::class);

    }

    public function productoPuesto()
    {
        return $this->hasMany(ProductoPuesto::class);

    }

    public function subCategoria()
    {
        return $this->belongsTo(SubCategoria::class);

    }

    public function usuarioProducto()
    {
        return $this->hasMany(UsuarioProducto::class);

    }


    public function boletaProducto()
    {
        return $this->hasMany(BoletaProducto::class);

    }
}
