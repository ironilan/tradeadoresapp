<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    use HasFactory;

    public function operaciones()
    {
        return $this->hasMany(Operacion::class);
    }

    public function accionrentable()
    {
        return $this->hasMany(Accionrentable::class);
    }

    public function entrada()
    {
        return $this->hasMany(Entrada::class);
    }
}
