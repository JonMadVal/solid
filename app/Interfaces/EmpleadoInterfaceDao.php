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
    public function getAll();
    public function create(array $data);
    public function update(array $data);
    public function delete($id);
}