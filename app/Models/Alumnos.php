<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Alumnos extends Model
{
    use HasFactory;
    protected $table = 'alumnos';
    protected $fillable = [
        'nombre',
        'correo',
        'fecha_nacimiento',
        'sexo',
        'carrera',
    ];
}
