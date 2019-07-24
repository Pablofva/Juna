@extends('plantilla')

@section('content')
    
<!-- CONTROLA QUE LA CONSULTA NO ESTE VACIA -->
 @if (count($comisions)==0) 
 <div class="row">
   <div class="col-sm-3">

     <h1 class="error"><i class="far fa-grin-beam-sweat"></i></h1>
   </div>
   <div class="col-sm-9 d-flex  justify-content-start  align-items-center">
   <h1 class="errorText">No hay comisiones</h1>

   </div>
 </div>
    @else
    <!-- COMIENZO DE LA PROYECCION PRINCIPAL -->
              <div class="container">
                 @foreach ($comisions as $item) 
                <h1 class="letra-titulo-materia">{{$comisions[0]->materia}}</h1>
                 @break 
                 @endforeach 
              </div>
          <!-- FILTRO DE COMISIONES -->
          <div class="row d-flex justify-content-center">
            <div class="col-sm-6 d-flex justify-content-center">

              <form class="form-inline py-1">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Comision</span>
                    </div>
                    <input type="text" id="myInputcomi" onkeyup="filtroComision()" class="form-control" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </form>
            </div>
            <div class="col-sm-6 d-flex justify-content-center">

              <form class="form-inline py-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Profesor</span>
                  </div>
                  <input type="text" id="myInputprof" onkeyup="filtroProfesor()" class="form-control" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </form>
            </div>
          </div>


          
                  
                  <!-- COMIENZO DE LISTA DE COMISIONES -->
<div class="container">
    <ul id="myULcomi" class="lista">
        @foreach($comisions as $item)
            <li>
        
                <div class="row py-4 container ml-1 rounded">
                    <div class="col-md-4  fondo_materia">
                        <!-- ROW SECUNDARIO -->
                
                        <DIV class="d-flex flex-column justify-content-center h-100  align-items-center ">
                            <P CLASS="materia">{{$item->comision}}</P>
                            
                            <P CLASS="comision">Profesor: {{$item->apellido}}</P>
                            
                        </div>
                        
                        
                        
                    </div>
                    <div class="col-md-8 fondito rounded-3">
                        @foreach($copia as $item2)
                        @if (($item->materia==$item2->materia)and($item->comision==$item2->comision) ) 
                        <div class="row">
                            <div class="col-sm-12 fondo-horario">
                                <i class="fas fa-star"></i>
                                <b>AULA </b>{{$item2->aula}} -
                                {{$item2->piso}}
                            </div>
                            <div class="col-sm-8">
                                <div class="col-sm-12">
                                    {{$item2->dia}} {{$item2->horario}}
                                </div>
                                  <div class="col-sm-12">
                                    <b>SEDE </b>{{$item2->sede}}
                                    
                                  </div>
                                  <div class="col-sm-12">
                                      <b>EDIFICIO </b>{{$item2->edificio}}
                                  </div>
                            </div>
                              <div class="col-sm-4">
                                
                                <!--------------- DIV BOTON MAPA --------------------->
                                <div class="d-flex flex-column justify-content-center h-100  align-items-center py-2">
                                    
                                    <button type="button" class="btn btn-mapa-universidad rounded-pill btn-lg boton-mapa-uni" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="llamarImagen({{$item2}})"><P class="letrasCirculoMapa">MAPA</P></button>
                                    
                                  </div>
                                  <!------------------- HASTA AQUI CHE ------------------------>
                              </div>
                              </div>
                              @endif
                              
                              @endforeach()  
                            </div>
                            <div class="col-md-2 ">
                              </div>
                            </div>
                          </li>
                          @endforeach()
                        </ul>
</div>

                <!----------------------------- MODAL ----------------------------------->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header" >
                        <h5 class="modal-title" id="header">...</h5>
                        <!-- PROYECCION POR JAVASCRIPT -->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        
                        <!-- <div id="map">
                          
                          </div> -->
                          <div id="body">
                            
                            </div>
                            
                          </div>
                          <div class="modal-footer" >
                          <h5 class="modal-title" id="footer">...</h5>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- LLAMADO A SCRIPT DE FILTRO  -->
                    <script type="text/javascript" src="{{asset('js/filtroProfesor.js')}}"></script>
                    <script type="text/javascript" src="{{asset('js/filtroComision.js')}}"></script>
                    <script type="text/javascript" src="{{asset('js/popupComisiones.js')}}"></script>
                    
                    @endif
                    @endsection