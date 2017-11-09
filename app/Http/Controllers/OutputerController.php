<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\OutputerInterface;

class OutputerController extends Controller implements OutputerInterface
{
    public function json($data){

        return $this->json($data);

    }
}
