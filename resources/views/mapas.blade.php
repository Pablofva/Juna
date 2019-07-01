@extends('pruebados')

@section('mapa')



<table class="table">
  <thead>
    <tr>
      <th scope="col">Materia</th>
      <th scope="col">Aula</th>
      <th scope="col">Información</th>
      <th scope="col">Piso</th>
      <th scope="col">Mapa</th>
      <th scope="col">Reportar</th>
    </tr>

  </thead>
  <tbody>

  	@foreach($aulas as $aula)

    <tr>
      <td></td>
      <td> {{$aula->numero}} </td>
      <td> {{$aula->nombre}} </td>
      <td> {{$aula->piso}} </td>
      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#mapa">
  		<i class="fa fa-map-signs" aria-hidden="true"></i> Ubicación</button></td>
      <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#desactualizada">
  		<i class="fa fa-ban" aria-hidden="true"></i> Aula Desactualizada</button></td>
    </tr>

    <!-- Modal Mapa -->
		<div class="modal fade" id="mapa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg modal-dialog-scrollable"  role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel"> Ubicación</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	
				<div class="card">
				  <div class="card-body">
				    <h5 class="card-title">{{$aula->id_edificio}}</h5>
				    <p class="card-text">Subsuelo: Aulas 01 a 07
											Planta Baja: Aulas 16-17 / 52 a 55
											Primer Piso: Aulas 120 a 140 
											Segundo Piso: Aulas 205 a 218
											Tercer Piso: Aulas 302 a 318 
											Cuarto Piso: Aulas 407 a 420
					</p>
				  </div>
				  <img src="mosconi.jpg" class="card-img-top" alt="...">
				</div>
		        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
		      </div>
		    </div>
		  </div>
		</div>


		<!-- Modal Aula Desactualizada -->
		<div class="modal fade" id="desactualizada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Reportar Aula Desactualizada</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        Aca va la elección de aulas
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		        <button type="button" class="btn btn-primary">Notificar</button>
		      </div>
		    </div>
		  </div>
		</div>


    @endforeach

  </tbody>
</table>






@endsection