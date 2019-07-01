@extends('pruebados')

@section('pruebadosinformatica')

<div class="row">
	<div class="col-md-12">
		<div class="fixed-auxheader">
        <div class="container">
            <nav>
                <h2> Ingeneria en Informática  </h2>
            </nav>
        </div>
    </div>
	</div>
</div>
<section class="text-center">

<div class="row">
        <div class="col-md-1">
            <form action="pruebadosingenieria">
                <button type="submit" class="btn btn-success btn-xs "><i class="fa fa-arrow-left" aria-hidden="true"></i>Atras</button>
            </form>
        </div>
</div>
<br/>

<form>
	<div class="form-row">

		<div class="col">
			<input type="text" class="form-control" placeholder="Nombre de la Materia">
		</div>
	    
		<button type="button" class="btn btn-info btn-xs "><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>

	</div>
</form><br/>

<button type="button" class="btn btn-info btn-xs "><i class="fa fa-search" aria-hidden="true"></i> Año de Carrera</button>
<button type="button" class="btn btn-info btn-xs "><i class="fa fa-search" aria-hidden="true"></i> Cuatrimestre</button>

<div class="col-md-12">
	<br/>
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Materia</th>
      <th scope="col">Información</th>
      <th scope="col">Mapa</th>
      <th scope="col">Reportar</th>
    </tr>

  </thead>
  <tbody>

    <tr>
      <td>Matematica 1</td>
      <td>Aula:10  Comision:MT1 Horario:10:00 a 12:00  </td>
      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#mapa">
  		<i class="fa fa-map-signs" aria-hidden="true"></i> Ubicación</button></td>
      <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#desactualizada">
  		<i class="fa fa-ban" aria-hidden="true"></i> Aula Desactualizada</button></td>
    </tr>
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
				    <h5 class="card-title">Edificio Mosconi</h5>
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

    <tr>
      <td>Algoritmos y Programacion</td>
      <td>Aula: Comision :  Horario:  </td>
      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#mapa">
  		<i class="fa fa-map-signs" aria-hidden="true"></i> Ubicación</button></td>
      <td><button type="button" class="btn btn-danger btn-xs "><i class="fa fa-ban" aria-hidden="true"></i> Aula Desactualizada</button></td>
    </tr>


    <tr>
      <td>Fisica II</td>
      <td>Aula: Comision:  Horario:  </td>
      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#mapa">
  		<i class="fa fa-map-signs" aria-hidden="true"></i> Ubicación</button></td>
      <td><button type="button" class="btn btn-danger btn-xs "><i class="fa fa-ban" aria-hidden="true"></i> Aula Desactualizada</button></td>
    </tr>
  </tbody>
</table>
</section>


@endsection