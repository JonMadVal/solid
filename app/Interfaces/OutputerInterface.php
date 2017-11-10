<?php
/**
 * Created by PhpStorm.
 * User: dev4
 * Date: 9/11/17
 * Time: 05:27 PM
 */

namespace App\Interfaces;

interface OutputerInterface
{
    public function json($data);

    public function xml( $data);
}