<?php
/**
 * Created by PhpStorm.
 * User: dev1
 * Date: 9/11/17
 * Time: 03:51 PM
 */

namespace App\Dao;

use App\models\Responsabilidades;
use App\Interfaces\ResponsabilidadesInterfaceDao;

class ResponsabilidadesDao implements ResponsabilidadesInterfaceDao
{

    private $responsabilidades;

    function __construct(Responsabilidades $responsabilidades) {
        $this->responsabilidades = $responsabilidades;
    }

    public function getById($id)
    {
        $this->responsabilidades->find($id);
    }

    public function getAll()
    {
        return $this->responsabilidades->all();
    }

    public function create(array $data)
    {
        $this->responsabilidades->create($data);
    }

    public function update(array $data)
    {
        $this->responsabilidades->update($data);
    }

    public function delete($id)
    {
        $this->responsabilidades->delete($id);
    }
}