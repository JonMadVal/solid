<?php
/**
 * Created by PhpStorm.
 * User: dev1
 * Date: 9/11/17
 * Time: 03:55 PM
 */

namespace App\Interfaces;

interface PersonaInterfaceDao
{
    public function getById($id);
    public function getAll();
    public function create(array $data);
    public function update(array $data,$id);
    public function delete($id);
}