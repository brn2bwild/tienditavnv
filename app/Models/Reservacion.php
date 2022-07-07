<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    use HasFactory;

    protected $fillable = ['Nombre','Telefono','Correo','LugarReservar','NoPersonas','HoraInicioReserv','HoraFinReserv','FechaReservacion'];
}
