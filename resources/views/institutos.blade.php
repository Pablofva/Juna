@extends('plantilla')

@section('seccion')
	


<!-- cuadro de busqueda -->

<div class="row">
	<div class="col-md-12">
		<div class="center-block py-4 ">
			<form class="form-inline">	  
				<div class="input-group mb-3" style="margin:auto">
					<input type="text" class="form-control" placeholder="Ingresar materia" aria-label="Recipient's username" aria-describedby="button-addon2" style='width: 900px; height: 60px; font-size: 25px; border-top-left-radius: 20px; border-bottom-left-radius: 20px;'>
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button" id="button-addon2" style="width: 90px;background-color:green;color:white">Buscar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
		
	
	
	<!-- fin de cuadro busqueda -->
	<!-- enlaces de institutos -->
	<div class="row mt-3">
		<div class="col-md-6">
		<form action="materias">
		<button id="" class="btn-danger btn-circle btn-lg mb-5" >Instituto de Ingeniería y Agronomía</button>
		
		</form>
		</div>
		<div class="col-md-6"><button id="salud" class="btn-success btn-circle btn-lg mb-5" data-toggle="modal" data-target=".bd-example-modal-lg " onclick="materias(3)">Instituto de Ciencias de la Salud</button></div>
		<div class="col-md-6"><button id="sociales" class="btn-info btn-circle btn-lg mb-5" data-toggle="modal" data-target=".bd-example-modal-lg "  onclick="materias(2)">Instituto de Ciencias Sociales y Administración</button></div>
		<div class="col-md-6"><button id="iniciales" class="btn-primary btn-circle btn-lg mb-5" data-toggle="modal" data-target=".bd-example-modal-lg "  onclick="materias(4)">Instituto de Estudios Iniciales</button></div>
	</div>
	
<!-- El popup hecho con bootstrap -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">CARRERAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="copa">
	  <!-- TABLA DONDE SE PROYECTAN LAS MATERIAS -->
							<table class="table table-hover">
						<thead>
							<tr>
							<th scope="col">#</th>
							<th scope="col">CARRERAS</th>
							
							</tr>
						</thead>
						<tbody id="res">
							
						</tbody>
						</table>
      	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
<script src="ajax/institutosAjax.js"></script>
	

@endsection