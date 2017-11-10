<?php
/**
 * Created by PhpStorm.
 * User: dev1
 * Date: 9/11/17
 * Time: 03:31 PM
 */

namespace App\Dao;

use App\models\Empleado;
use App\Interfaces\EmpleadoInterfaceDao;

class EmpleadoDao implements EmpleadoInterfaceDao
{
    private $empleado;

    function __construct(Empleado $empleado) {
        $this->empleado = $empleado;
    }

    public function getById($id)
    {
        return $this->empleado->find($id);
    }

    public function getByIdWithPersona($id)
    {
        return $this->empleado->with("getPersona")->find($id);
    }

    public function getAll()
    {
        return $this->empleado->all();
    }

    public function getAllWithPersona()
    {
        return $this->empleado->with("getPersona")->get();
    }

    public function create(array $data)
    {
        return $this->empleado->create($data);
    }

    public function update(array $data,$id)
    {
        $empleado = $this->empleado->find($id);
        $empleado->update($data);
        return $empleado->save();
    }

    public function delete($id)
    {
        $empleado = $this->empleado->find($id);
        return $empleado->delete($id);
    }
}