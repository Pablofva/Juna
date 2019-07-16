@extends('plantilla')

@section('content')
    
    <h1 class="letra-titulo pb-3"><strong>Seleccione la carrera</strong></h1>

    <div class="row">
        @foreach ($carreras as $item)
        <div class="col-md-6">
            <a href="{{ Route('materias', $item->id) }}" class="btn btn-info botones-inicio" id="">
                    {{$item->nombre}}
                </a>
            </div>
        @endforeach
    </div>

    
<!-- Este script cambia el color de la cabecera - se podría usar un color distinto para cada instituto -->
    <script>
        var selector = {{$carreras[0]->instituto_id}};
        if(selector == 1){
            document.getElementById("fondo-cabecera").style.backgroundColor = "#A63321";
        }else if(selector == 2){
            document.getElementById("fondo-cabecera").style.backgroundColor = "#283B8A";
        }else if(selector == 3){
            document.getElementById("fondo-cabecera").style.backgroundColor = "#8AB03F";
        }else if(selector == 4){
            document.getElementById("fondo-cabecera").style.backgroundColor = "#F39231";
        }
    </script>

@endsection