<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(){
        return view('user.admin'); //nombrecarpeta.nombrearchivo
    }
    
    public function store(Request $request){
        
        $url = "http://localhost:8000/psicologos/psicologos/";
        $request_json = json_encode($request-> all());
        $curl = curl_init();
        
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $request_json);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json',
          'Content-Length: ' . strlen($request_json)
        ));
      
        $response = curl_exec($curl);
        curl_close($curl);
        return redirect()-> route('admin.index');

    }

    public function update(Request $request, $id){
        $url = "http://localhost:8000/psicologos/psicologos/$id";
        $data= json_encode($request-> all());
        $ch = curl_init();
        // Establece la URL a la que se realizará la solicitud
        curl_setopt($ch, CURLOPT_URL, $url);

        // Establece el método de la solicitud
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

        // Establece los datos a enviar en el cuerpo de la solicitud
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        // Establece que se espere una respuesta
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        ));
        // Ejecuta la solicitud
        $response = curl_exec($ch);
        curl_close($ch);
        return redirect()-> route('admin.index');
    }

    public function destroy(Request $request, $id){
        $url = "http://localhost:8000/psicologos/psicologos/$id";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return redirect()-> route('admin.index');
    }
    
}
