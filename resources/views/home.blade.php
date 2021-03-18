@extends('layout')

@section('title', 'Home')

@section('content')
<div class="hero">
        <div class="container">
          <h1 class="display-4 text-white"
          >#NoMásAbusos</h1>
        </div>
      </div>
<section class="section">
  <div class="row">
    <div class="col-12">
      <div class="container text-center">
      <p class="copy">En esta página podrá direccionar su queja a las entidades que 
        le ayudarán a darle solución a su problemática <br>Por favor seleccione la entidad que le generó la problemática</p>
      </div>
      <div class="section__grid">       
        <div class="section__item">
          
          <a class="btn btn-lg btn-block" 
          href="{{ route('codensa') }}">
          <img src="../img/energia.png" alt="" />
          <p>#RespondaCodensa</p></a>
        </div>
        <div class="section__item">
          
          <a class="btn btn-lg btn-block" 
          href="{{ route('vanti') }}">
          <img src="../img/vanti.png" alt="" />
          <p>#VantiResponda</p></a>
        </div>
        <div class="section__item">
          <a class="btn btn-lg btn-block" 
          href="{{ route('agua') }}">
          <img src="../img/agua.png" alt="" />
          <p>#RespondaAcueducto</p></a>
        </div>
      <a class="btn btn-lg btn-block" 
        href="{{ route('projects.index') }}">casos</a>
      </div>
  </div>
</div>
  

@endsection