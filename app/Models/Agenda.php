<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = ['id','title', 'start', 'end', 'nombreCliente', 'email', 'rut', 'telefono','dia','hora', 'comentario','id_servicio'];


}
