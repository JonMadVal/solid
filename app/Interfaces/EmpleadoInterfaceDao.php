<?php
/**
 * Created by PhpStorm.
 * User: dev1
 * Date: 9/11/17
 * Time: 03:33 PM
 */

namespace App\Interfaces;

interface EmpleadoInterfaceDao
{
    public function getById($id);
    public function getByIdWithPersona($id);
    public function getAll();
    public function getAllWithPersona();
    public function create(array $data);
    public function update(array $data,$id);
    public function delete($id);
}