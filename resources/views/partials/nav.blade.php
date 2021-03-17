<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm justify-content-space-bet">
    
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            {{ config('app.name')}}
        </a>
        <button class="navbar-toggler" type="button" 
            data-toggle="collapse" 
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class="nav-item">
                <a class="nav-link {{ setActive('home')}}" href="{{ route('home') }}">@lang('Home')</a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link {{ setActive('about')}}" href="{{ route('about') }}">@lang('About')</a>
                </li> -->
                <!-- <li class="nav-item">
                <a class="nav-link {{ setActive('projects.*')}}" href="{{ route('projects.index') }}">@lang('Projects')</a>
                </li> -->
                <li class="nav-item">
                <a class="nav-link {{ setActive('contact')}}" href="{{ route('codensa') }}">@lang('Codensa')</a>

                </li>
                <li class="nav-item"><a class="nav-link {{ setActive('contact')}}" href="{{ route('vanti') }}">@lang('Vanti')</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('contact')}}" href="{{ route('agua') }}">@lang('Acueducto')</a></li>
                @guest
                <li class="nav-item"><a class="nav-link {{ setActive('login')}}" href="{{ route('login') }}">@lang('Login')</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('register')}}" href="{{ route('register') }}">@lang('Registrarse')</a></li>

                @else
                    <li class="nav-item"><a class="nav-link" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
    
  </nav>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>