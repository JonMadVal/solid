<?php
/**
 * Created by PhpStorm.
 * User: dev1
 * Date: 9/11/17
 * Time: 02:38 PM
 */
namespace App\Interfaces;

interface Empleado
{
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