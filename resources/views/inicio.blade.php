@extends('plantilla')

@section('content')
    
    <h1 class="letra-titulo"><strong>Bienvenido a JUNA</strong></h1>
    <h3 class="letra-subtitulo">Escoja una opción para empezar</h3>

    <div class="row">
        <div class="col-md-6">
            <a href="{{ Route('aulas') }}" class="btn btn-aulas botones-inicio">
                <i class="fas fa-chalkboard-teacher"></i> Aulas
            </a>
        </div>
        <div class="col-md-6">
            <a href="" class="btn btn-libros botones-inicio">
                <i class="fas fa-book"></i> Libros
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ Route('oficinas') }}" class="btn btn-oficinas botones-inicio">
                <i class="fas fa-building"></i> Oficinas
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ Route('mapas') }}" class="btn btn-mapas botones-inicio">
                <i class="fas fa-map-marked-alt"></i> Mapas
            </a>
        </div>
    </div>


@endsection