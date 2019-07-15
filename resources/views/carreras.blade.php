@extends('plantilla')

@section('content')
    
    <h1 class="letra-titulo"><strong>Seleccione la carrera</strong></h1>

    <div class="row">
        @foreach ($carreras as $item)
        <div class="col-md-6">
                <a href="" class="btn btn-ingenieria botones-inicio" id="{{$item}}" data-toggle="modal" data-target="#{{$item}}">
                    {{$item}}
                </a>
            </div>
        @endforeach
    </div>
    




<!-- Modal Informatica -->
<div class="modal fade bd-example-modal-lg" id="{{$item}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{$item}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <table id="materias" class="table">
              <thead>

                  <tr>
                      <th>Materia</th>
                      <th>Año</th>
                      <th>Comisiones</th>
                  </tr>
                  
              </thead>
               <tbody>
                  @foreach($carreras as $materia)
                  <tr>
                       <td>{{ $materia->nombre }}</td>
                       <td>{{ $materia->anio }}</td>
                       {{-- <td><a href="{{  route('pruebadosinformatica', $materia->id)  }}" class="btn btn-success" role="button">Buscar</a></td> --}}

                       
                  </tr>
                  @endforeach

              </tbody>

          </table>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          
        </div>
      </div>
    </div>
  </div>










    
    <!-- Este script cambia el color de la cabecera - se podría usar un color distinto para cada instituto -->
    <script>
        document.getElementById("fondo-cabecera").style.backgroundColor = "#3B76DB";
    </script>


@endsection