
<nav class="navbar navbar-expand">
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('inicio') }}"><img src="{{asset('img/logo-unaj.png')}}" alt=""></a>
            </li>
            <li class="nav-item">
                <img class="nav-link" src="{{asset('img/logo-juna.png')}}" alt="JUNA">
            </li>
        </ul>
       
        
        @if (Request::is('/'))
         {{--    --}}
        @else
            {{--  @if (Request::is('/institutos'))
            <a href="{{ route('inicio') }}" class="btn btn-light"><i class="fas fa-user"></i>Volver al inicio</a>
            @endif

            @if (Request::is('/carreras/*'))
            <a href="{{ route('institutos') }}" class="btn btn-light"><i class="fas fa-user"></i>Volver a institutos</a>
            <a href="{{ route('inicio') }}" class="btn btn-light"><i class="fas fa-user"></i>Volver al inicio</a>
             @endif

            @if (Request::is('/listarComisiones/*'))
            <a href="{{ route('carreras') }}" class="btn btn-light"><i class="fas fa-user"></i>Volver a carreras</a>
            <a href="{{ route('inicio') }}" class="btn btn-light"><i class="fas fa-user"></i>Volver al inicio</a>
            @endif  --}}
            <a href="{{ route('inicio') }}" class="btn btn-light"></i>Volver al inicio</a>
        @endif
        
        
        

        {{--  @if (Request::is('listarComisiones/*'))
            <a href="{{ route('inicio') }}" class="btn btn-light"><i class="fas fa-user"></i>Volver al inicio</a>
        @endif
        @if (Request::is('/'))
         <a href="{{ URL::previous() }}" class="btn btn-light"><i class="fas fa-user"></i>Volver atrás</a>
        @endif
        @if (Request::is('/'))
            
        @endif  --}}
 
        
        
       
        
    </div>
</nav>
    