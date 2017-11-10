<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dao\BeneficioDao;
use App\models\Beneficio;
use App\Http\Controllers\OutputerController;

class BeneficioController extends Controller
{
    public function create(Request $request){

        $data = [
            'beneficio'=>"Bono cumplimiento",
            'valorbeneficio'=>"2%"
        ];

        $beneficioDao = new BeneficioDao(new Beneficio());
        $rtn = $beneficioDao->create($data);
        var_dump($rtn);
    }

    public function getAll(){

        $beneficioDao = new BeneficioDao(new Beneficio());
        $rtn = $beneficioDao->getAll();
        return json_encode($rtn);
    }

    public function getById($id){

        $beneficioDao = new BeneficioDao(new Beneficio());
        $rtn = $beneficioDao->getById($id);
        return json_encode($rtn);
    }

    public function update($id){
        $data = [
            'beneficio'=>"Bono editado",
            'valorbeneficio'=>"5%"
        ];

        $beneficioDao = new BeneficioDao(new Beneficio());
        $rtn = $beneficioDao->update($data, $id);
        return json_encode($rtn);
    }

    public function delete($id){
        $beneficioDao = new BeneficioDao(new Beneficio());
        $rtn = $beneficioDao->delete($id);
        return json_encode($rtn);
    }
}
