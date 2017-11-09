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
        return $this->persona->find($id);
    }

    public function getAll()
    {
        return $this->persona->all();
    }

    public function create(array $data)
    {
        return $this->persona->create($data);
    }

    public function update(array $data,$id)
    {
        $persona = $this->persona->find($id);
        $persona->update($data);
        return $persona->save();
    }

    public function delete($id)
    {
        $persona = $this->persona->find($id);
        return $persona->delete($id);
    }
}