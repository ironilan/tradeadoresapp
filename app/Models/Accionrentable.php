<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accionrentable extends Model
{
    use HasFactory;

    public function accion()
    {
        return $this->belongsTo(Accion::class);
    }
}
