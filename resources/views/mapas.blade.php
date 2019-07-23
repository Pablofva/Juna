@extends('plantilla')

@section('content')
    
    <h1 class="letra-titulo pt-5 pb-4"><strong>Mapas de la universidad</strong></h1>
<div class="my-custom-scrollbar">
    <div class="row">
            <div class="col-md-6">
                <button type="button" id="buffet" class="btn btn-mapas btn-block botones-inicio" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-pizza-slice"></i> Buffet</button>
            </div>
            <div class="col-md-6">
                <button type="button" id="sala" class="btn btn-mapas btn-block botones-inicio" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-book"></i> Sala de estudio</button>
            </div>
            <div class="col-md-6">
                <button type="button" id="fotocopiadora" class="btn btn-mapas btn-block botones-inicio" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-hdd"></i> Fotocopiadoras</button>
            </div>
            <div class="col-md-6">
                <button type="button" id="departamentos" class="btn btn-mapas btn-block botones-inicio" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-city"></i> Departamentos</button>
            </div>
            <div class="col-md-6">
                <button type="button" id="laboratorio" class="btn btn-mapas btn-block botones-inicio" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-flask"></i> Laboratorio</button>
            </div>
            <div class="col-md-6">
                <button type="button" id="baños" class="btn btn-mapas btn-block botones-inicio" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-toilet"></i> Baños</button>
            </div>
    </div>
</div>

    <!-- El popup hecho con bootstrap -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Mapa de la ubicación</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <!-- La imagen que se muestra en pantalla se escoge segun el boton que se presione "popup.js" -->
              <img class="imagen-sector" id="selector-imagen">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
        
<script type="text/javascript" src="js/popup.js"></script>


@endsection