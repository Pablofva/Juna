@extends('plantilla')

@section('content')
    
    <h1 class="letra-titulo"><strong>Seleccione la materia</strong></h1>

    

    <table id="materias" class="table">
        <thead>
    
            <tr>
                <th>Materia</th>
                
    
            </tr>
        </thead>
         <tbody>
            @foreach($materias as $item)
            <tr>
                 <td><a href=""  id="">
                    {{$item->nombre}}
                </a></td>
                
                   
                 
            </tr>
            @endforeach
    
        </tbody>
    
    </table>
    

    
    <!-- Este script cambia el color de la cabecera - se podría usar un color distinto para cada instituto -->
    <script>
        document.getElementById("fondo-cabecera").style.backgroundColor = "#3B76DB";
    </script>
<!-- Bootstrap DATATABLES -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

<script>
    $(document).ready(function() {
        $('#materias').DataTable({"info": false,"ordering": false,"paging":   false, "scrollY":        
                                      "200px","language":{"zeroRecords": "No se encontraron asdasdsa","search":"Buscar:"}
        }
            
            );
    } );
    </script>

@endsection