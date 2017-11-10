<?php

namespace App\Http\Controllers;

use App\Interfaces\OutputerInterface;
use Illuminate\Http\Request;
use App\Dao\BeneficioDao;
use App\models\Beneficio;

class BeneficioController extends Controller
{

    private $output;
    function __construct(){
        $this->output = new OutputerController();
    }
    public function create(Request $request){

        $data = [
            'beneficio'=>"Bono cumplimiento",
            'valorbeneficio'=>"2%"
        ];

        $beneficioDao = new BeneficioDao(new Beneficio());
        $rtn = $beneficioDao->create($data);
        return $this->output->json($rtn);
    }

    public function getAll(){

        $beneficioDao = new BeneficioDao(new Beneficio());
        $rtn = $beneficioDao->getAll();
        return $this->output->json($rtn->toArray());
    }

    public function getById($id){

        $beneficioDao = new BeneficioDao(new Beneficio());
        $rtn = $beneficioDao->getById($id);
        return $this->output->json($rtn->toArray());
    }

    public function update($id){

        $data = [
            'beneficio'=>"Bono editado",
            'valorbeneficio'=>"5%"
        ];

        $beneficioDao = new BeneficioDao(new Beneficio());
        $rtn = $beneficioDao->update($data, $id);
        return $this->output->json($rtn->toArray());
    }

    public function delete($id){

        $beneficioDao = new BeneficioDao(new Beneficio());
        $rtn = $beneficioDao->delete($id);
        return $this->output->json($rtn->toArray());

    }
}
