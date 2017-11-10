<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    public $timestamps = false;
    protected $primaryKey = 'idempleados';
    protected $fillable = [
        "idempleados",
		"cargo",
		"departamento",
		"salario",
		"jornada",
		"tipocontrato",
		"personas_idpersonas"
    ];

    public function getPersona()
    {
        return $this->hasOne('App\models\Persona',"idpersonas","personas_idpersonas");
    }
}
