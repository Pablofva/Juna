@extends('plantilla')

@section('content')
    

            	@foreach($comisions as $comision)
                 <h1 class="letra-titulo"><strong>{{$comision->materia->nombre}}</strong></h1>
                @break
                @endforeach



<section class="text-center">
 


<table id="comisiones" class="table">
    <thead>

        <tr>
            <th>Comision</th>
            <th>Aula</th>
            <th>Dia</th>
            <th>Horario</th>
            <th>Mapa</th>
            <th>Reportar</th>

        </tr>
    </thead>
     <tbody>
        @foreach($comisions as $comision)
        <tr>
             <td>{{ $comision->nombre }}</td>
             <td>{{ $comision->aula->numero }}</td>
             <td>{{ $comision->dia }}</td>
             <td>{{ $comision->horario }}</td>
             <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#mapa">
		  		<i class="fa fa-map-signs" aria-hidden="true"></i> Ubicación</button></td>
		     <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#desactualizada">
		  		<i class="fa fa-ban" aria-hidden="true"></i> Aula Desactualizada</button></td>
		    
           	
             
        </tr>
        @endforeach

    </tbody>

</table>


<!-- Modal Aula Desactualizada -->
<div class="modal fade" id="desactualizada" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Reportar Aula</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form>
          <div class="form-row">

            <div class="form-group">

                    <select class="custom-select" required>
                      <option value="">Toque para desplegar el menú de Sedes</option>
                      <option value="1">Sede Central</option>
                    </select>
                    </div>
                   
                    <div class="form-group">
                    <select class="custom-select" required>
                      <option value="">Toque para desplegar el menú de Edificios</option>
                      <option value="1">One</option>
                    </select>
                    </div>

                    <div class="form-group" id="Aulas">
                    <select class="custom-select" required>
                      <option value="">Toque para desplegar el menú de Aulas</option>
                      <option value="1">One</option>
                    </select>
                    </div>

            </div>
          <button class="btn btn-danger" type="submit" id="gracias" ><i class="fa fa-ban" aria-hidden="true"></i> Reportar</button>
        </form>

      </div>

      <div class="modal-footer">
        Utilice el botón de reportes en caso de que la comisión no pertenezca al aula mostrada. Caso contrario cierre la ventana de reportes tocando la 'X' en la parte superior izquierda.
      </div>

    </div>
   </div>
</div>


@endsection