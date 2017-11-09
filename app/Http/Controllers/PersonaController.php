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

    public function update(Request $request){

        $data = [
            'documento'=>"85155379",
            'nombres'=>"Carlos Miguel - update",
            'apellidos'=>"Martes Vega - update",
            'email'=>"carlos.martes@handycommerce.com.co",
            'direccion'=>"Handy",
            'telefono'=>"3043474688",
            'fechanacimiento'=>"1985-12-26",
            'sexo'=>"Masculino"
        ];

        $personaDao = new PersonaDao(new Persona());
        $rtn = $personaDao->update($data,1);
        var_dump($rtn);
    }

    public function getPersona($id){
        $personaDao = new PersonaDao(new Persona());
        $rtn = $personaDao->getById($id);
        var_dump($rtn);
    }

    public function getAllPersonas(){
        $personaDao = new PersonaDao(new Persona());
        $rtn = $personaDao->getAll();
        var_dump($rtn);
    }

    public function delete($id){
        $personaDao = new PersonaDao(new Persona());
        $rtn = $personaDao->delete($id);
        var_dump($rtn);
    }
}
