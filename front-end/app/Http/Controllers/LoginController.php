<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login'); //nombrecarpeta.nombrearchivo
    }
}
