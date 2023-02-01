<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function create(){
        return view('user.perfilPaciente'); //nombrecarpeta.nombrearchivo
    }
 
}
