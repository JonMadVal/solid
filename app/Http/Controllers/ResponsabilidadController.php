<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dao\ResponsabilidadesDao;
use App\models\Responsabilidades;


class ResponsabilidadController extends Controller
{
    public function create(Request $request){
        $data = [
            'responsabilidad'=>"Desarrollador",
            'descripcion'=>"Desarrollar las aplicaciones segun los requerimientos"
        ];

        $responsabilidadDao = new ResponsabilidadesDao(new Responsabilidades());
        $rtn = $responsabilidadDao->create($data);
        var_dump($rtn);
    }


    public function getAll(){

        $responsabilidadDao = new ResponsabilidadesDao(new Responsabilidades());
        $rtn = $responsabilidadDao->getAll();
        return json_encode($rtn);
    }

    public function getReponsabilidad($id){

        $responsabilidadDao = new ResponsabilidadesDao(new Responsabilidades());
        $rtn = $responsabilidadDao->getById($id);
        var_dump($rtn);
        return json_encode($rtn);
    }

    public function update($id){
        $data = [
            'responsabilidad'=>"Responsabilidad editado",
            'descripcion'=>"Responsabilidad editada"
        ];

        $respondabilidadDao = new ResponsabilidadesDao(new Responsabilidades());
        $rtn = $respondabilidadDao->update($data, $id);
        return json_encode($rtn);
    }

    public function delete($id){
        $responsabilidadDao = new ResponsabilidadesDao(new Responsabilidades());
        $rtn = $responsabilidadDao->delete($id);
        return json_encode($rtn);
    }


}
