<?php
/**
 * Created by PhpStorm.
 * User: dev1
 * Date: 9/11/17
 * Time: 02:38 PM
 */
namespace App\Interfaces;

interface Beneficio
{
    public function getById($id);
    public function getAll();
    public function create(array $data);
    public function update(array $data);
    public function delete($id);
    public function getBeneficio();
    public function setBeneficio();
}