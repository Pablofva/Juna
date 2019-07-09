@extends('pruebados')

@section('pruebadossalud')
<div class="row">
	<div class="col-md-12">
		<div class="fixed-auxheader">
        <div class="container">
            <nav>
                <h2> Instituto de Ciencias de la Salud  </h2>
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
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Medicina</button></div>
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Bioquímica</button></div>
		<div class="col-md-12"><br /></div>
		<div class="col-md-6"><button type="button" class="btn btn-info btn-lg ">Tecnicatura Universitaria en Información Clínica y Gestión de Pacientes</button></div>
		<div class="col-md-6"><button type="button" class="btn btn-info btn-lg ">Licenciatura en Organización y Asistencia de Quirófanos</button></div>
		<div class="col-md-12"><br /></div>
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Licenciatura en Kinesiología y Fisiatría</button></div>
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Tecnicatura en Emergencias Sanitarias y Desastres</button></div>
		<div class="col-md-12"><br /></div>
		<div class="col-md-6"><button type="button" class="btn btn-info btn-lg ">Maestria en Neurociencias</button></div>
		<div class="col-md-6"><button type="button" class="btn btn-info btn-lg ">Licenciatura en Enfermería</button></div>
		<div class="col-md-12"><br /></div>
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Tecnicatura Universitaria en Farmacia Hospitalaria</button></div>
		<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg ">Maestría en Investigación Traslacional para la Salud</button></div> 
		<div class="col-md-12"><br /></div>
		<div class="col-md-12"><button type="button" class="btn btn-info btn-lg ">Especialización en Cardiología</button></div>
		<div class="col-md-12"><br /></div>
	</div>
</div>
@endsection