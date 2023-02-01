@extends('layouts.app')
@section('title','Home')

@section('content')
      <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="container h3 text-center">Ingresa como ...</div>  
          <div class="row d-flex justify-content-center align-items-center h-100 text-center">
            <div class="col">
                <img class="rounded-circle" width="140" height="140" src="https://clinicanuevoamanecer.cl/wp-content/uploads/2020/07/psicologo-adulto-psicologia-fonasa-clinica-nuevo-amanecer-infantil.png" alt="">
                <a class="h2 text-dark text-decoration-none" href="{{route('admin.index')}}">Administrador</a>
              </div>
              <div class="col">
                <img class="rounded-circle" width="140" height="140" src="https://th.bing.com/th/id/OIP.6J81xd6NuDgre0i3tOb8hAAAAA?pid=ImgDet&w=306&h=425&rs=1" alt="">
                <a class="h2 text-dark text-decoration-none" href="{{route('login.index')}}">Paciente</a>
              </div>
        </div>
homeeee

      </section>

@endsection