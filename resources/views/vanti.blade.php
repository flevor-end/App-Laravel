@extends('layout')

@section('title', 'Vanti')

@section('content')
<div class="container bgCodensa">
  <div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
    
    <form class="bg-white shadow rounded py-3 px-4" 
      method="POST" 
      action="{{ route('messages.store')}}"
    >

      @csrf
      <h1 class="display-5">@lang('Vanti')</h1>
      <p>Ingrese Su caso aqui</p>
      <hr>
      <div class="form-group">
        <label for="case">Cual es su caso?</label>
        <select name="Cobros Excesivos" class="form-control bg-light shadow-sm">

          <option>Cobros excesivos por cambio del medidor</option>

          <option>Revisiones Periodicas</option>

          <option>Reconexion</option>
          <option value="">Servicios Tercerizados</option>

        </select>
      </div>
      <div class="form-group">
        <label for="name">Nombre</label>
        <input class="form-control bg-light shadow-sm 
        @error('name') is-invalid @else border-0 @enderror" 
        id="name"
        name="name" 
        placeholder="Nombre ..." 
        value="{{ old('name')}}"
        >
        @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control bg-light shadow-sm 
          @error('email') is-invalid @else border-0 @enderror" 
          id="email"
          type="text" 
          name="email" 
          placeholder="Email ..." 
          value="{{ old('email') }}"
        >
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
        
      <div class="form-group">
        <label for="subject">Localidad</label>
        <input class="form-control bg-light shadow-sm 
        @error('subject') is-invalid @else border-0 @enderror" 
        id="subject"
        name="subject" 
        placeholder="Localidad ..." 
        value="{{ old('subject') }}"
        >
        @error('subject')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group">
        <label for="Number">Numero de Contacto:</label>
        <input class="form-control bg-light shadow-sm 
        @error('Number') is-invalid @else border-0 @enderror" 
        id="Number"
        name="Number" 
        placeholder="Numero ..." 
        value="{{ old('Number') }}"
        type="number"
        >
        @error('subject')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group">
        <label for="file">Subir un archivo</label>
        <input class="form-control bg-light shadow-sm 
        @error('file') is-invalid @else border-0 @enderror" 
        id="file"
        name="file" 
        placeholder="sube tu archivo ..." 
        value="{{ old('file') }}"
        type="file"
        >
        @error('subject')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="content">Explica tu caso:</label>
        <textarea class="form-control bg-light shadow-sm 
        @error('content') is-invalid @else border-0 @enderror" 
        id="content"
        name="content" 
        placeholder="Explicacion del caso..."
        >{{ old('content') }}
        </textarea>
        @error('content')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
        @enderror
      </div>

      <button class="btn btn-primary btn-lg btn-block">@lang('Enviar')</button>
    </form>
    </div>
  </div>
  @endsection
</div>