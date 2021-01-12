<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;

    public function region()
    {
        return $this->belongsTo(Region::class);

    }

    public function calle()
    {
        return $this->hasMany(Calle::class);

    }
}
