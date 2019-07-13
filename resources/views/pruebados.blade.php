<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

     <!-- Bootstrap DATATABLES -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <!--<Iconos de los botones redondos>-->

    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">








<title>Buscador Juna</title>


</head>
<body>
    <div class="fixed-header">
        <div class="container">
            <nav>
                <h1> Sistema de Gestión de Aulas  </h1>
            </nav>
        </div>
    </div>

    <!-- Cuerpo de Página --> 
    <div class="container">
        <br/>
        <div class="container text-center ">


                @yield('pruebadosseleccion')
                @yield('pruebadosinstitutos')
                @yield('pruebadosingenieria')
                @yield('pruebadossalud')
                @yield('pruebadossociales')
                @yield('pruebadosiniciales')
                @yield('pruebadosinformatica')
                @yield('mapa')
                @yield('welcome')
                @yield('mostrarcomisiones')
        </div>
    </div>   

    <div class="fixed-footer">
        <div class="container">Universidad Arturo Jauretche</div>        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e2026878df.js"></script>

    <!-- jQuery para DataTables -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#materias').DataTable({"info": false,"ordering": false,"paging":   false, "scrollY":        "200px","language":{"zeroRecords": "No se encontraron resultados","search":"Buscar:"},"columnDefs": [ {
                                      "targets": 2,
                                      "searchable": false
                                    } ]
        }
            
            );
    } );
    </script>

    <script>
    $(document).ready(function() {
        $('#comisiones').DataTable({"info": false,"ordering": false,"paging":   false, "scrollY":        "250px","language":{"zeroRecords": "No se encontraron resultados","search":"Buscar:"},"columnDefs": [ {
                                      "targets": 4,
                                      "searchable": false,
                                      "targets": 5,
                                      "searchable": false
                                    } ]
        }
            
            );
    } );
    </script>
    
    

</body>
</html>