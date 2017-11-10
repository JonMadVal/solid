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
        return $this->responsabilidades->find($id);
    }

    public function getAll()
    {
        return $this->responsabilidades->all();
    }

    public function create(array $data)
    {
        $this->responsabilidades->create($data);
    }

    public function update(array $data, $id)
    {
        $responsabilidad = $this->responsabilidades->find($id);
        $responsabilidad->update($data);
        return $responsabilidad->save();;
    }

    public function delete($id)
    {
        $responsabilidad = $this->responsabilidades->find($id);
        return $responsabilidad->delete($id);
    }
}