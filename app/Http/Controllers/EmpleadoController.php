<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adapters\EmpleadoPersona;

class EmpleadoController extends Controller
{
    public function create(Request $request){
    	$dataPersona = [
            'documento'=>"234567",
            'nombres'=>"Carlos Miguel",
            'apellidos'=>"Martes Vega",
            'email'=>"carlosmiguel782@gmail.com",
            'direccion'=>"Handy",
            'telefono'=>"3043474688",
            'fechanacimiento'=>"1985-12-26",
            'sexo'=>"Masculino"
        ];

        $dataEmpleado = [
            "cargo"=>"Desarrollador",
			"departamento"=>"Tecnologia",
			"salario"=>"1000",
			"jornada"=>"Completa",
			"tipocontrato"=>"Indefinido",
			"personas_idpersonas"=>0
        ];

        $data = array("persona"=>$dataPersona,"empleado"=>$dataEmpleado);

        $empleadoPersona = new EmpleadoPersona();
        $rtn = $empleadoPersona->createEmpleado($data);

        var_dump($rtn);
    }

    public function getEmpleado($id)
    {
    	$empleadoPersona = new EmpleadoPersona();
        return $empleadoPersona->getEmpleadoWithPersona($id);
    }

    public function getAllEmpleado()
    {
    	$empleadoPersona = new EmpleadoPersona();
        return $empleadoPersona->getAllEmpleadoWithPersona();
    }

    public function updateEmpleado()
    {
    	$dataPersona = [
            'documento'=>"234567",
            'nombres'=>"Carlos Miguel - update",
            'apellidos'=>"Martes Vega - update",
            'email'=>"carlosmiguel782@gmail.com",
            'direccion'=>"Handy",
            'telefono'=>"3043474688",
            'fechanacimiento'=>"1985-12-26",
            'sexo'=>"Masculino"
        ];

        $dataEmpleado = [
            "cargo"=>"Desarrollador PHP",
			"departamento"=>"Tecnologia",
			"salario"=>"10000",
			"jornada"=>"Completa",
			"tipocontrato"=>"Indefinido",
			"personas_idpersonas"=>5
        ];

        $data = array("persona"=>$dataPersona,"empleado"=>$dataEmpleado);

        $empleadoPersona = new EmpleadoPersona();
        $rtn = $empleadoPersona->updateEmpleado($data,2);

        var_dump($rtn);
    }

    public function deleteEmpleado($id)
    {
    	$empleadoPersona = new EmpleadoPersona();
        $rtn = $empleadoPersona->deleteEmpleado($id);
        var_dump($rtn);
    }
}
