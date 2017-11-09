<?php
/**
 * Created by PhpStorm.
 * User: dev1
 * Date: 9/11/17
 * Time: 03:56 PM
 */

namespace App\Dao;

use App\models\Persona;
use App\Interfaces\PersonaInterfaceDao;

class PersonaDao implements PersonaInterfaceDao
{
    private $persona;

    function __construct(Persona $persona) {
        $this->persona = $persona;
    }

    public function getById($id)
    {
        $this->persona->find($id);
    }

    public function getAll()
    {
        $this->persona->all();
    }

    public function create(array $data)
    {
        $this->persona->create($data);
    }

    public function update(array $data)
    {
        $this->persona->update($data);
    }

    public function delete($id)
    {
        $this->persona->delete($id);
    }
}