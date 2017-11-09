<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    public $timestamps = false;
    protected $primaryKey = 'idpersonas';
    protected $fillable = [
        'idpersonas',
        'documento',
        'nombres',
        'apellidos',
        'email',
        'direccion',
        'telefono',
        'fechanacimiento',
        'sexo'
    ];

}
