<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Interfaces\OutputerInterface;

class OutputerController extends Controller implements OutputerInterface
{
    public function json($data){
        return response()->json( $data);

    }
    public function xml($data){

        return xmlrpc_encode($data);

    }
}
