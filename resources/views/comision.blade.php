@extends('plantilla')

@section('content')
    

            	@foreach($comisions as $comision)
                 <h1 class="letra-titulo"><strong>{{$comision->materia}}</strong></h1>
                @break
                @endforeach
          <!-- FILTRO DE COMISIONES -->
                <form class="form-inline py-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Comision</span>
                      </div>
                      <input type="text" id="myInputcomi" onkeyup="filtroComision()" class="form-control" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </form>
                  
                  <!-- COMIENZO DE LISTA DE COMISIONES -->
<ul id="myULcomi">
@foreach($comisions as $item)
    <li>

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
                        <b>SEDE </b>{{$item2->sede}}
                        <!--------------- DIV BOTON MAPA --------------------->
                        <div class="d-flex flex-column justify-content-start h-100  align-items-center py-2">
                            
                            <button type="button" class="btn btn-success btn-circle btn-lp" data-toggle="modal" data-target=".bd-example-modal-xl" onclick="llamarImagen({{$item2}})"><P class="letrasCirculoMapa">MAPA</P></button>
                            
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
                <!----------------------------- MODAL ----------------------------------->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mapas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        
                        <!-- <div id="map">
                          
                          </div> -->
                          <div id="myimagen">
                            
                            </div>
                            ...SFSDFDSFSDFSDFDSFDSF
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <script type="text/javascript" src="{{asset('js/filtroComision.js')}}"></script>
                    
                    
                    @endsection