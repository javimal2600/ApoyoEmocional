<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopcion extends Model
{
    use HasFactory;
    protected $table = "adopcions";
    protected $fillable = [
        'mascota_id',
        'solicitud_id',
        'fecha'
    ];
}
