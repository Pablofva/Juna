@extends('plantilla')

@section('content')
    
<h1 class="letra-titulo pt-5 pb-4"><strong>Seleccione el instituto</strong></h1>

<div class="row">
    <div class="col-md-6">
        <a href="{{ Route('carreras', 1) }}" class="btn btn-ingenieria botones-inicio" id="ingenieria">
            Ingeniería y Agronomía
        </a>
    </div>
    <div class="col-md-6">
        <a href="{{ Route('carreras', 3) }}" class="btn btn-salud botones-inicio" id="salud">
            Ciencias de la Salud
        </a>
    </div>
    <div class="col-md-6">
        <a href="{{ Route('carreras', 2) }}" class="btn btn-sociales botones-inicio" id="sociales">
            Ciencias Sociales y Administración
        </a>
    </div>
    <div class="col-md-6">
        <a href="{{ Route('carreras', 4) }}" class="btn btn-iniciales botones-inicio" id="iniciales">
            Estudios Iniciales
        </a>
    </div>
    <div class="col-md-12 pt-4">
        <a href="{{ Route('inicio') }}" class="btn btn-info boton-volver">Volver al inicio</a>
    </div>

</div>


@endsection