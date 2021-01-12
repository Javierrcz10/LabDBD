<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoPuesto extends Model
{
    use HasFactory;

    public function puestoFeria()
    {
        return $this->belongsTo(PuestoFeria::class);

    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);

    }

   
}
