@extends('plantilla')

@section('seccion')
    
<div class="boton-inicio-sesion" style="transform: translate(55%,-300%)">
    <form action="login">
        <button class="btn btn-success">Iniciar sesión</button>
    </form>
</div>
<div class="titulo">
    <h1 style="font-family: 'Lobster', cursive;font-size: 80px">Sistema de búsqueda de aulas</h1>
</div>

<div class="boton-comenzar" style="margin-top:100px">
    <form action="opciones">
        <button class="btn btn-success" style="width:300px;height:100px; border-radius:40px;font-family: 'Lobster', cursive;font-size:40px">Comenzar</button>
    </form>
</div>

@endsection