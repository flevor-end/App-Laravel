@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="display-4 text-primary"
      >Desarrollo Web Prueba Laravel</h1>
      <p>Prueba desarrollada por fabian pedraza desarrollador semi senior</p>
      <a class="btn btn-lg btn-block" 
        href="{{ route('contact') }}">Contáctame</a>
      <a class="btn btn-lg btn-block" 
        href="{{ route('projects.index') }}">Prueba</a>


    </div>
  </div>
</div>
  



@endsection