<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class psicologo extends Model
{
    use HasFactory;
    protected $table = "psicologos";
    protected $fillable = [
        'nombre',
        'apellidos',
        'fechanac',
        'cedula',
        'telefono',
        'correo'
    ];
}
