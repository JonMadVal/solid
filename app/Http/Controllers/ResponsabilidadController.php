<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dao\ResponsabilidadesDao;
use App\models\Responsabilidades;


class ResponsabilidadController extends Controller
{
    private $output;
    function __construct(){
        $this->output = new OutputerController();
    }
    public function create(Request $request){
        $data = [
            'responsabilidad'=>"Desarrollador",
            'descripcion'=>"Desarrollar las aplicaciones segun los requerimientos"
        ];

        $responsabilidadDao = new ResponsabilidadesDao(new Responsabilidades());
        $rtn = $responsabilidadDao->create($data);
        return $this->output->json($rtn);
    }


    public function getAll(){

        $responsabilidadDao = new ResponsabilidadesDao(new Responsabilidades());
        $rtn = $responsabilidadDao->getAll();
        return $this->output->json($rtn);
    }

    public function getReponsabilidad($id){

        $responsabilidadDao = new ResponsabilidadesDao(new Responsabilidades());
        $rtn = $responsabilidadDao->getById($id);
        return $this->output->json($rtn);
    }

    public function update($id){
        $data = [
            'responsabilidad'=>"Responsabilidad editado",
            'descripcion'=>"Responsabilidad editada"
        ];

        $respondabilidadDao = new ResponsabilidadesDao(new Responsabilidades());
        $rtn = $respondabilidadDao->update($data, $id);
        return $this->output->json($rtn);
    }

    public function delete($id){
        $responsabilidadDao = new ResponsabilidadesDao(new Responsabilidades());
        $rtn = $responsabilidadDao->delete($id);
        return $this->output->json($rtn);
    }


}
