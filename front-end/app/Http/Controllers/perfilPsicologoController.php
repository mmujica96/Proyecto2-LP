<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perfilPsicologoController extends Controller
{
    public function create(){
        return view('user.perfilPsicologo'); //nombrecarpeta.nombrearchivo
    }

    public function show($id){
        $url = "http://localhost:8000/psicologos/psicologos/$id";
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        $psicologo = $data['psicologo'];

        $url2 = "http://localhost:8000/psicologos/educacion/$id";
        $json2 = file_get_contents($url2);
        $data2 = json_decode($json2, true);
        $estudios = $data2['titulos'];

        return view('user.perfilPsicologo', compact('psicologo', 'estudios'));


        

    }

}
