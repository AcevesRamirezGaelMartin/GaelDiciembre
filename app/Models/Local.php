<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected  $fillable = [
        'nombre_local',
        'usuario_id',
        'ubicacion',
        'telefono',
        'precio',
        'capacidad',
        'tamano',
    ];
}
