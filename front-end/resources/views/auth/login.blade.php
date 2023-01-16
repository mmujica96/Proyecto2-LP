@extends('layouts.app')
@section('title','Login') <!-- nombre del titulo de la pagina-->
<link href="{{ asset('\css\login.css') }}" rel="stylesheet">
@section('content')
<div class="container shadow p-3 mb-5 mt-5 rounded" id="container-image">
    <h1 class="text-center ">Iniciar Sesion</h1>
    <div class="abs-center">
      <form action="#" class="border p-3 form">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </div>
     
@endsection