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
        return view('user.perfilPsicologo', $psicologo);
    }

}
