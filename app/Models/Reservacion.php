<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    use HasFactory;

    protected $fillable = [
      'nombre_reservacion',
      'numero_telefonico',
      'email',
      'fecha_reservacion',
      'hora_reservacion',
      'area_reservacion',
      'comentario',
      'n_personas',
    ];
}
