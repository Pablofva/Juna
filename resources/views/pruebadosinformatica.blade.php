@extends('pruebados')

@section('pruebadosinformatica')

<div class="row">
	<div class="col-md-12">
		<div class="fixed-auxheader">
        <div class="container">
            <nav>
            	@foreach($comisiones as $comision)
                <h2> {{$comision->materia->nombre}} </h2>
                @break
                @endforeach
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

<table id="comisiones" class="table">
    <thead>

        <tr>
            <th>Comision</th>
            <th>Aula</th>
            <th>Horario</th>
            <th>Segundo Horario</th>
            <th>Mapa</th>
            <th>Reportar</th>

        </tr>
    </thead>
     <tbody>
        @foreach($comisiones as $comision)
        <tr>
             <td>{{ $comision->nombre }}</td>
             <td>{{ $comision->aula->numero }}</td>
             <td>{{ $comision->horario }}</td>
             <td>{{ $comision->horariodos }}</td>
             <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#mapa">
		  		<i class="fa fa-map-signs" aria-hidden="true"></i> Ubicación</button></td>
		     <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#desactualizada">
		  		<i class="fa fa-ban" aria-hidden="true"></i> Aula Desactualizada</button></td>
		    
           	
             
        </tr>
        @endforeach

    </tbody>

</table>


@endsection