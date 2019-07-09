@extends('pruebados')
@section('pruebadosinstitutos')
<!-- margen -->
<div class="row">
	<div class="col-md-12">
		<div class="fixed-auxheader">
        <div class="container">
            <nav>
                <h2> Seleccione el Instituto al que pertenece  </h2>
            </nav>
        </div>
    </div>
	</div>
</div>

<div class="row">
        <div class="col-md-1 col-sm-1">
            <form action="pruebadosseleccion">
                <button type="submit" class="btn btn-success btn-xs "><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button>
            </form>
        </div>
</div>
 


<!-- enlaces de institutos -->
<div class="row mt-3">
	<div class="col-md-6">
		<form action="pruebadosingenieria">
		<button type="submit" class="btn-danger btn-circle btn-lg mb-5" >Instituto de Ingeniería y Agronomía</button>
		</form>
	</div>
	<div class="col-md-6">
		<form action="pruebadossalud">
		<button type="submit" class="btn-success btn-circle btn-lg mb-5">Instituto de Ciencias de la Salud</button>
		</form>
	</div>
	<div class="col-md-6">
		<form action="pruebadossociales">
		<button type="submit" class="btn-info btn-circle btn-lg mb-5">Instituto de Ciencias Sociales y Administración</button>
		</form>	
	</div>
	<div class="col-md-6">
		<form action="pruebadosiniciales">
		<button type="submit" class="btn-primary btn-circle btn-lg mb-5">Instituto de Estudios Iniciales</button>
		</form>
	</div>
</div>
@endsection
<!--	--------------------------------------
	cuadro de busqueda

	<div class="row">
<div class="col-md-12">
	<div class="center-block py-4 ">
		<form class="form-inline">
	
  			<div class="form-group mb-2 ">
    			<label for="staticEmail2" class="sr-only">Email</label>
    			<input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Introduzca Materia">
  			</div>
  			<div class="form-group mx-md-3 mb-2">
    			<label for="inputPassword2" class="sr-only">Password</label>
    			<input type="password" class="form-control" id="inputPassword2" placeholder="Materia">
  			</div>
  			<button type="submit" class="btn btn-warning btn-circle mb-2">Confirmar</button>

		</form>
		</div>
</div>
</div>
-->
