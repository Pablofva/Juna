@extends('pruebados')

@section('pruebadosingenieria')

<div class="row">
	<div class="col-md-12">
		<div class="fixed-auxheader">
        <div class="container">
            <nav>
                <h2> Instituto de Ingeniería y Agronomía  </h2>
            </nav>
        </div>
    </div>
	</div>
</div>

<div class="container">

	<div class="row">
		
		<div class="col-md-1">
			<form action="pruebadosinstitutos">
				<button type="submit" class="btn btn-success btn-xs "><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button>
			</form>
		</div>
		<div class="col-md-10 "></div>
		<div class="col-md-1">
			<form action="pruebadosseleccion">
				<button type="submit" class="btn btn-danger btn-xs" ><i class="fa fa-times" aria-hidden="true"></i> Salir</button>
			</form>
		</div>
		
		<br />	<br />	<br />

		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Ingeneria en Petróleo</button></div>
		<div class="col-md-6">
		
		<button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#Informatica">Ingeneria en Informática</button>
		
		</div>
		<div class="col-md-12"><br /></div>
		<div class="col-md-6"><button type="button" class="btn btn-info btn-lg ">Bioingenería</button></div>
		<div class="col-md-6"><button type="button" class="btn btn-info btn-lg ">Ingeneria Industrial</button></div>
		<div class="col-md-12"><br /></div>
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Ingeneria Electromecánica</button></div>
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Ingeneria en Administración Agraria</button></div>
		<div class="col-md-12"><br /></div>
		<div class="col-md-6"><button type="button" class="btn btn-info btn-lg ">Ingeneria en Ciencias Agrarias</button></div>
		<div class="col-md-6"><button type="button" class="btn btn-info btn-lg ">Ingeneria en Transporte</button></div>
		<div class="col-md-12"><br /></div>
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Tec. Universitaria en Emprendimientos Agropecuarios</button></div>
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Tec. Universitaria en Producción Vegetal Intensiva</button></div> 
		<div class="col-md-12"><br /></div>






		<!-- Modal Informatica -->
		<div class="modal fade bd-example-modal-lg" id="Informatica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Ingenieria en Informatica</h5>
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
					    @foreach($materias as $materia)
					    <tr>
					         <td>{{ $materia->nombre }}</td>
					         <td>{{ $materia->anio }}</td>
					         <td><a href="{{  route('pruebadosinformatica', $materia->id)  }}" class="btn btn-success" role="button">Buscar</a></td>

					         
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


	</div>
</div>





@endsection