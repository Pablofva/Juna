@extends('plantilla')


@section('seccion')

<div class="container-fluid wrapper text-center">
    <div class="row align-items-center">
            <div class="col-md-6">
                <a href="">
                <button id="" class="btn-danger btn-circle btn-lg mb-5 mt-5" type="submit" name="test" value="1" >
                    Instituto de Ingeniería y Agronomía
                </button>
                </a>
            </div>
            
            <div class="col-md-6">
                <a href="{{route('tablas')}}">
                    <button id="" class="btn-success btn-circle btn-lg mb-5 mt-5" type="submit" name="test" value="2">
                        Instituto de Ciencias de la Salud
                    </button>
                </a>
            </div>
            
            <div class="col-md-6">
                <a href="">
                <button id="" class="btn-info btn-circle btn-lg mb-5" type="submit" name="test" value="3">
                    Instituto de Ciencias Sociales y Administración
                </button>
                </a>
            </div>
            
            <div class="col-md-6">
                <a href="">
                <button id="" class="btn-primary btn-circle btn-lg mb-5" type="submit" name="test" value="4">
                    Instituto de Estudios Iniciales
                </button>
                </a>   
            </div>
    </div>

    {{-- @foreach ($variables as $item)
        
    <a href="{{route('institutos', $item)}}" class="h4 text-danger">{{$item}}</a>

    @endforeach

    @if (empty($saludo))
        <h2>La barra de inst esa vacía</h2>
    @endif
    @if (!empty($saludo))
        @switch($saludo)
            @case($saludo == 'Hola')
                <h2>El saludo es {{ $saludo}}</h2>
                @break
            @case($saludo == 'Chau')
                <h2>El saludo es {{ $saludo}}</h2>
                @break
            @default
                <h2>Nada</h2>
        @endswitch
    @endif --}}


</div>

@endsection