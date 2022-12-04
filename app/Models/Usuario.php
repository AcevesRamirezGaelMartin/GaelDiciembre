<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'contrasena',
        'correo',
        'telefono',
    ];

   
}
