@extends('plantilla')
@section('seccion')
<h1>este es mi equipo</h1>
@foreach($equipo as $item)
<a href="{{route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a><br>
@endforeach
@if(!empty($nombre))
    @switch($nombre)
        @case($nombre=='david')
        <h2 class="mt-5"> el nombre es {{$nombre}}</h2>
        <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipi</p>
        @break
        @case($nombre=='alex')
        <h2 class="mt-5"> el nombre es {{$nombre}}</h2>
        <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipi</p>
        @break
        @case($nombre=='juan')
        <h2 class="mt-5"> el nombre es {{$nombre}}</h2>
        <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipi</p>
        @break
    @endswitch
@endif
@endsection