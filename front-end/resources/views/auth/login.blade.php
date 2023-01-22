@extends('layouts.app')
@section('title','Login') <!-- nombre del titulo de la pagina-->
<link href="{{ asset('\css\login.css') }}" rel="stylesheet">
@section('content')
<div class="container shadow p-5 mb-5 mt-5 rounded" id="container-image">
    <div class="wrap">
        <h1 class="text-center m-0">Iniciar Sesion</h1>
    </div>
    <div class="abs-center">
      <form action="#" class="m-0 form" method="">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" >
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>

        {{-- <p class="border border-danger rounded-sm p-2 my-2 text-danger">* Error</p> --}}

        <div class="text-center p-4" >
            <button type="submit" class="btn" id="btn-login" >
              <a class="text-white text-decoration-none" href="{{route('profile.index')}}">Login
              </a>
            </button>
        </div>
      </form>
    </div>
  </div>
     
@endsection