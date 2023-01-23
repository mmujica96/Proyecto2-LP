<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perfilPsicologoController extends Controller
{
    public function create(){
        return view('user.perfilPsicologo'); //nombrecarpeta.nombrearchivo
    }

}
