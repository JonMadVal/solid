<?php
/**
 * Created by PhpStorm.
 * User: dev1
 * Date: 9/11/17
 * Time: 03:49 PM
 */

namespace App\Interfaces;

interface ResponsabilidadesInterfaceDao
{
    public function getById($id);
    public function getAll();
    public function create(array $data);
    public function update(array $data);
    public function delete($id);
}