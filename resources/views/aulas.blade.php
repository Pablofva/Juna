@extends('plantilla')

@section('content')
    
<h1 class="letra-titulo pt-5 pb-4"><strong>Seleccione el instituto</strong></h1>

<div class="row">
    <div class="col-md-6">
        <a href="" class="btn btn-ingenieria botones-inicio" id="ingenieria">
            Ingeniería y Agronomía
        </a>
    </div>
    <div class="col-md-6">
        <a href="" class="btn btn-salud botones-inicio">
            Ciencias de la Salud
        </a>
    </div>
    <div class="col-md-6">
        <a href="" class="btn btn-sociales botones-inicio">
            Ciencias Sociales y Administración
        </a>
    </div>
    <div class="col-md-6">
        <a href="" class="btn btn-iniciales botones-inicio">
            Estudios Iniciales
        </a>
    </div>
    <div class="col-md-12 pt-4">
        <a href="{{ Route('inicio') }}" class="btn btn-info boton-volver">Volver al inicio</a>
    </div>

</div>


<!-- Este script cambia el color de la cabecera - se podría usar un color distinto para cada instituto -->
<script>
    document.getElementById("fondo-cabecera").style.backgroundColor = "#3B76DB";
</script>

@endsection