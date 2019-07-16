@extends('plantilla')

@section('content')
    
    <h1 class="letra-titulo"><strong>Seleccione la carrera</strong></h1>

    <div class="row">
        @foreach ($carreras as $item)
        <div class="col-md-6">
            <a href="{{ Route('materias', $item->id) }}" class="btn btn-ingenieria botones-inicio" id="">
                    {{$item->nombre}}
                </a>
            </div>
        @endforeach
    </div>

    
    <!-- Este script cambia el color de la cabecera - se podría usar un color distinto para cada instituto -->
    <script>
        document.getElementById("fondo-cabecera").style.backgroundColor = "#3B76DB";
    </script>


@endsection