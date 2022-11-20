<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'nombres',
        'apellidos',
        'telefono',
        'genero',
        'fecha_n',
        'direccion',
        'foto',
        'especialidad',
        'cedula',
    ];

}
