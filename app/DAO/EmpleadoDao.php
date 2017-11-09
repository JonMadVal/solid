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

    public function getAll()
    {
        return $this->empleado->all();
    }

    public function create(array $data)
    {
        $this->empleado->create($data);
    }

    public function update(array $data)
    {
        $this->empleado->update($data);
    }

    public function delete($id)
    {
        $this->empleado->delete($id);
    }
}