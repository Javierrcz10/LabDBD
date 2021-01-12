<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoletaProducto extends Model
{
    use HasFactory;

    public function boleta()
    {
        return $this->belongsTo(Boleta::class);

    }
    public function producto()
    {
        return $this->belongsTo(App\Models\Producto::class);

    }
}
