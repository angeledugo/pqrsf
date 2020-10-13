<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $fillable = ['email','identificacion','tipo_identificacion','nombres','apellidos','pais',
        'departamento','ciudad','barrio', 'direccion','zip','telefono','celular'];
}
