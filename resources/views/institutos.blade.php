
@extends('plantilla')
@section('seccion')
<div class="bd-example">
  <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carrusel1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
        	<!-- Comienza el contenedor del selector de institutos -->
          <div class="modal1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
              <div class="modal-content contenedor-modal">
                <div class="modal-header">
                  <h2>Seleccione el instituto</h2>
                </div>
                <div class="modal-body">
                  <!-- Botones de Institutos -->
                  <div class="row">
                      @foreach($institutos as $item)
                      <!-- AL HACER CLICK SE EJECUTA LA FUNCION TODO EN LA HOJA CARRUSEL JS -->
                    <a class="carousel-control-next boton-institutos" href="#carousel" role="button" data-slide="next">
                      <button type="button" id="{{$item->nombre}}" class="btn btn-danger btn-block boton-institutos" data-toggle="modal" data-target="" onclick="llamarCarreras({{$item->id}})">
                
                      {{$item->nombre}}
                      
                      </button>
                    </a>
                    @endforeach()
                    <!-- <a class="carousel-control-next boton-institutos" href="#carousel" role="button" data-slide="next"> 
                     <button type="button" id="salud" class="btn btn-success btn-block boton-institutos" data-toggle="modal" data-target="">Instituto de ciencas de la salud</button> 
                    </a>
                    <a class="carousel-control-next boton-institutos" href="#carousel" role="button" data-slide="next">
                      <button type="button" id="sociales" class="btn btn-info btn-block boton-institutos" data-toggle="modal" data-target="">Instituto de ciencias sociales y Administracion</button>
                    </a>
                    <a class="carousel-control-next boton-institutos" href="#carousel" role="button" data-slide="next">
                      <button type="button" id="iniciales" class="btn btn-primary btn-block boton-institutos" data-toggle="modal" data-target="">Instituto de estudios iniciales</button>
                    </a>-->
                  
                </div>
                </div>
                <div class="modal-footer">
                  <a class="carousel-control-prev boton-volver" href="#carousel" role="button" data-slide=""><button type="button" id="salir" class="btn btn-primary" data-toggle="modal" data-target="">Volver a la pagina de inicio</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/carrusel1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <!-- Comienza el contenedor del selector de carreras -->
          <div class="modal1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
              <div class="modal-content contenedor-modal">
                <div class="modal-header">
                  <h5 class="modal-title">Seleccione la carrera</h5>
                </div>
                <div class="modal-body">
                  <div class="row" id="contenido-body">
                    <!-- AQUI SE GENERAN LAS CARRERAS DESDE JAVASCRIPT -->

                 </div>
               </div>
               <div class="modal-footer">
                <a class="carousel-control-prev boton-volver" href="#carousel" role="button" data-slide="prev"><button type="button" id="volver" class="btn btn-primary" data-toggle="modal" data-target="">Volver al inicio</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carrusel1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <div class="modal1" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content contenedor-modal">
              <div class="modal-header">
                <h5 class="modal-title">Seleccione la materia</h5>
                
              </div>
              <div class="modal-body">
              <form class="form-inline">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Materias</span>
                      </div>
                      <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </form>
                  <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"> -->
                     <!-- <ul id="myUL"> -->
                   <!-- <div class="row" id="contenidoMate-body"> -->
                        <!-- AQUI SE GENERAN LAS MATERIAS DESDE JAVASCRIPT -->
                        <table id="myTable" class="table table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">Materia</th>
                                    <th scope="col">Año</th>
                                    
                                  </tr>
                                </thead>
                                <tbody id="mita">
                                 
                                </tbody>
                              </table>
                  
                          <!-- </ul> -->
                    <!-- </div> -->
              </div>
              <div class="modal-footer">
                <a class="carousel-control-prev boton-volver" href="#carousel" role="button" data-slide="prev"><button type="button" id="volver" class="btn btn-primary" data-toggle="modal" data-target="">Volver al inicio</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection