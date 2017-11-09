<?php
/**
 * Created by PhpStorm.
 * User: dev1
 * Date: 9/11/17
 * Time: 02:38 PM
 */
namespace App\Interfaces;

interface EmpleadoInterface
{
    public function getById($id);
    public function getAll();
    public function create(array $data);
    public function update(array $data);
    public function delete($id);
    public function getSalary();
    public function setSalary($salary);
    public function getStatus();
    public function setStatus($status);
    public function getCargo();
    public function setCargo($cargo);
    public function getTipoCargo();
    public function setTipoCargo($tipoCargo);
    public function getJornada();
    public function setJornada($jornada);
}