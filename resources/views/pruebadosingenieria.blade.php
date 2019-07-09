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
		<form action="pruebadosinformatica">
		<button type="submit" class="btn btn-primary btn-lg ">Ingeneria en Informática</button>
		</form>
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
	</div>
</div>

@endsection