<?php
/**
 * Created by PhpStorm.
 * User: dev1
 * Date: 9/11/17
 * Time: 05:52 PM
 */

namespace App\Interfaces;

interface EmpleadoPersonaInterface
{
    public function getEmpleadoWithPersona($idEmpleado);
    public function getAllEmpleadoWithPersona();
    public function createPersona(array $data);
    public function createEmpleado(array $data);
    public function updatePersona(array $data,$id);
    public function updateEmpleado(array $data,$id);
    public function deletePersona($id);
    public function deleteEmpleado($id);
}