@extends('pruebados')

@section('pruebadosiniciales')

<div class="row">
	<div class="col-md-12">
		<div class="fixed-auxheader">
        <div class="container">
            <nav>
                <h2> Instituto de Estudios Iniciales  </h2>
            </nav>
        </div>
    </div>
	</div>
</div>

<div class="container">

	<div class="row">
		<div class="row">
			<div class="col-md-1">
				<form action="pruebadosinstitutos">
					<button type="submit" class="btn btn-success btn-xs "><i class="fa fa-arrow-left" aria-hidden="true"></i>Atras</button>
				</form>
			</div>
		</div>
		

		<div class="col-md-10"></div>

		<div class="row">
			<div class="col-md-1">
				<form action="pruebadosseleccion">
					<button type="submit" class="btn btn-danger btn-xs " ><i class="fa fa-times" aria-hidden="true"></i>Salir</button>
				</form>
			</div>
		</div>
		<br />	<br />	<br />
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Matemática Inicial</button></div>
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Problemas de  Historia Argentina</button></div>
		<div class="col-md-12"><br /></div>
		<div class="col-md-6"><button type="button" class="btn btn-info btn-lg ">Taller de Literatura y Escritura</button></div>
		<div class="col-md-6"><button type="button" class="btn btn-info btn-lg ">Práticas Culturales</button></div>
		<div class="col-md-12"><br /></div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="center-block py-4 "></div>
		</div>
	</div>

</div>
@endsection