<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctors_id',
        'patients_email',
        'fecha',
        'horarios_id',
        'def_cita',
        'descripcion',
    ];

    public function doctors()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function horarios()
    {
        return $this->belongsTo(Horario::class);
    }
}
