<?php
/**
 * Created by PhpStorm.
 * User: dev1
 * Date: 9/11/17
 * Time: 03:44 PM
 */

namespace App\Dao;

use App\models\Beneficio;
use App\Interfaces\BeneficioInterfaceDao;

class BeneficioDao implements BeneficioInterfaceDao
{

    private $beneficio;

    function __construct(Beneficio $beneficio) {
        $this->beneficio = $beneficio;
    }

    public function getById($id)
    {
        return $this->beneficio->find($id);
    }

    public function getAll()
    {
        return $this->beneficio->all();
    }

    public function create(array $data)
    {
        return $this->beneficio->create($data);
    }

    public function update(array $data, $id)
    {
        $beneficio = $this->beneficio->find($id);
        $beneficio->update($data);
        return $beneficio->save();;
    }

    public function delete($id)
    {
        return $this->beneficio->delete($id);
    }
}