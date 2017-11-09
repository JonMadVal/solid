<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dao\PersonaDao;
use App\models\Persona;

class PersonaController extends Controller
{
    public function create(Request $request){

        $data = [
            'documento'=>"85155379",
            'nombres'=>"Carlos Miguel",
            'apellidos'=>"Martes Vega",
            'email'=>"carlos.martes@handycommerce.com.co",
            'direccion'=>"Handy",
            'telefono'=>"3043474688",
            'fechanacimiento'=>"1985-12-26",
            'sexo'=>"Masculino"
        ];

        $personaDao = new PersonaDao(new Persona());
        $rtn = $personaDao->create($data);
        var_dump($rtn);
    }

    public function getView(Request $request){
        return view('welcome');
    }
}
