@extends('plantilla')
@section('seccion')
@foreach($aulas as $item)
<div class="row py-4 container ml-1">
    <div class="col-md-3  fondo_materia ">
    <!-- ROW SECUNDARIO -->
                
                <DIV class="d-flex flex-column justify-content-center h-100  align-items-center ">
                <P CLASS="materia">{{$item->materia}}</P>

                    <P CLASS="comision">Profesor:{{$item->apellido}}</P>
                    <P CLASS="comision">COMISION:{{$item->comision}}</P>
                
                </div>
        
            
        
    </div>
    <div class="col-md-4 fondito">
    @foreach($copia as $item2)
        @if (($item->materia==$item2->materia)and($item->comision==$item2->comision) ) 
        <div class="row">
        <div class="col-sm-12">
            <i class="fas fa-star"></i>
            {{$item2->horario}}
        
        </div>
        <div class="col-sm-6">
            <b>AULA </b>{{$item2->aula}}
        </div>
        <div class="col-sm-6">
            <b>EDIFICIO </b>{{$item2->edificio}}
        </div>
        <div class="col-sm-6">
            <b>SEDE </b>{{$item2->horario}}
        </div>
        </div>
        @endif
   
         @endforeach()  
    </div>
    <div class="col-md-2 ">
        <div class="d-flex flex-column justify-content-center h-100  align-items-center py-2">
        <button type="button" class="btn btn-success btn-circle btn-lp"><P class="letrasCirculoMapa">MAPA</P></button>
        </div>
    </div>
</div>
@endforeach()
@endsection