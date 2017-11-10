<?php
/**
 * Created by PhpStorm.
 * User: dev1
 * Date: 9/11/17
 * Time: 05:43 PM
 */
namespace App\Adapters;
use App\Interfaces\EmpleadoPersonaInterface;

use App\Dao\EmpleadoDao;
use App\models\Empleado;
use App\Dao\PersonaDao;
use App\models\Persona;


class EmpleadoPersona implements EmpleadoPersonaInterface
{

	public function getEmpleadoWithPersona($idEmpleado)
	{
		$empleadoDao = new EmpleadoDao(new Empleado());
        return $empleadoDao->getByIdWithPersona($idEmpleado);
	}

    public function getAllEmpleadoWithPersona()
    {
		$empleadoDao = new EmpleadoDao(new Empleado());
        return $empleadoDao->getAllWithPersona();
    }
    public function createPersona(array $data)
    {
		$personaDao = new PersonaDao(new Persona());
        return $personaDao->create($data);
    }
    public function createEmpleado(array $data)
    {
    	$persona = $this->createPersona($data["persona"]);
    	$data["empleado"]["personas_idpersonas"] = $persona->idpersonas;
    	$empleadoDao = new EmpleadoDao(new Empleado());
        return $empleadoDao->create($data["empleado"]);
    }
    public function updatePersona(array $data,$id)
    {
		$personaDao = new PersonaDao(new Persona());
        $rtn = $personaDao->update($data,$id);
    }
    public function updateEmpleado(array $data,$id)
    {
		$this->updatePersona($data["persona"], $data["empleado"]["personas_idpersonas"]);
    	$empleadoDao = new EmpleadoDao(new Empleado());
        return $empleadoDao->update($data["empleado"],$id);
    }
    public function deletePersona($id)
    {
		$personaDao = new PersonaDao(new Persona());
        $personaDao->delete($id);
    }
    public function deleteEmpleado($id)
    {
    	$empleadoDao = new EmpleadoDao(new Empleado());
    	$empleado = $empleadoDao->getById($id);
    	$rtn = $empleadoDao->delete($id);
    	$this->deletePersona($empleado->personas_idpersonas);
    	return $rtn;
    }

}