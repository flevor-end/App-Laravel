<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/app.css">
  <script src="/js/app.js" defer></script>

</head>
<body>
  <div id="app" class="d-flex flex-column h-screen 
  justify-content-between">
    <header>@include('partials.nav')
      @auth
  {{ auth()->user()->name }}
  @endauth
    </header>
  
    <main class="py-4">@yield('content')</main>
    
    <footer  class="bg-dark text-center text-white-50 py-3 shadow">
      {{ config('app.name') }} | Copyright @ {{ date('y') }}
    </footer>
  </div>
  </body>
</html>