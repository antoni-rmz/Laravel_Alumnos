<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Alumnos extends Model
{
    //impementacion de factory para el modelo Alumnos
    //y asi poder crear datos de prueba facilmente
    use HasFactory;

    protected $table = 'alumnos';
    protected $fillable = [
        'codigo',
        'nombre',
        'correo',
        'fecha_nacimiento',
        'sexo',
        'carrera',
    ];
}
