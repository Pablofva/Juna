@extends('pruebados')

@section('pruebadossociales')
<div class="row">
	<div class="col-md-12">
		<div class="fixed-auxheader">
        <div class="container">
            <nav>
                <h2> Instituto de Ciencias Sociales y Administración  </h2>
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
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Licenciatura en Economía</button></div>
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Licenciatura en Trabajo Social</button></div>
		<div class="col-md-12"><br /></div>
		<div class="col-md-6"><button type="button" class="btn btn-info btn-lg ">Licenciatura en Administración</button></div>
		<div class="col-md-6"><button type="button" class="btn btn-info btn-lg ">Licenciatura en Gestión Ambiental</button></div>
		<div class="col-md-12"><br /></div>
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Licenciatura en Relaciones del Trabajo</button></div>
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Especialización en Evaluación de Políticas Públicas</button></div>
		<div class="col-md-12"><br /></div>
		<div class="col-md-12"><button type="button" class="btn btn-info btn-lg ">Curso de Posgrado «Ecotoxicología Acuática»</button></div>
		<div class="col-md-12"><br /></div>
		<div class="col-md-12"><button type="button" class="btn btn-primary btn-lg ">Diplomatura Superior y de Vinculación en Gobiernos Locales y Transformación Social</button></div>
		<div class="col-md-12"><br /></div>
	</div>
</div>
@endsection