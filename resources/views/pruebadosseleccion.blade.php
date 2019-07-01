@extends('pruebados')

@section('pruebadosseleccion')
<div class="container text-center ">
    <br/>
    <div class="row">
    	<div class="col-md-6 py-4">
    		<form action="pruebadosinstitutos">
    		<button type="submit" class="btn btn-success btn-circle btn-xl">
    		<i class="fas fa-chalkboard-teacher"></i>
            <h3>Aulas</h3>
            </button>
    		</form>
    	</div>
    	<div class="col-md-6 py-4">
             <button type="button" class="btn btn-warning btn-circle btn-xl">
             <i class="fas fa-book"></i>
             <h3>Libros</h3>
             </button>
    	</div>
    	<div class="col-md-6 py-4">
             <button type="button" class="btn btn-info btn-circle btn-xl">
             <i class="far fa-building"></i>
             <h3>Oficinas</h3>
             </button>
    	</div>
    	<div class="col-md-6 py-4">
    		<form action="mapas">
            <button type="submit" class="btn btn-danger btn-circle btn-xl">
            <i class="fas fa-map-marked-alt"></i>
            <h3>Mapas</h3>
            </button>
        	</form>
    	</div>
    </div>
</div>
@endsection