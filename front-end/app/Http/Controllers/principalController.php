<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class principalController extends Controller
{
    public function show(){
        return view('auth.login'); //nombrecarpeta.nombrearchivo
    }

}
