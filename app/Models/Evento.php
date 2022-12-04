<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    static $rules = [
    ];

    protected $perPage = 20;
    protected $fillable = [
        
        'nombre_evento',
        'usuario_id',
        'local_id',
        'invitaciones',
        'fechas',
        'horarios',
        'ubicacion',
    ];
}
