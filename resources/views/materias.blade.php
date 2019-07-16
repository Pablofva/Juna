@extends('plantilla')

@section('content')
    
    <h1 class="letra-titulo"><strong>Seleccione la materia</strong></h1>

    <table id="materias" class="table">
        <thead>
            <tr>
                <th>Materias</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materias as $item)
                <tr>
                    <td>
                        <a href=""  id="">{{$item->nombre}}</a>
                    </td>    
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <!-- Este script cambia el color de la cabecera - se podría usar un color distinto para cada instituto -->
    <script>
        document.getElementById("fondo-cabecera").style.backgroundColor = "#3B76DB";
    </script>


@endsection