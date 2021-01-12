<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    use HasFactory;

    public function categoria()
    {
        return $this->hasMany(Categoria::class);

    }

    public function producto()
    {
        return $this->hasMany(Producto::class);

    }
}
