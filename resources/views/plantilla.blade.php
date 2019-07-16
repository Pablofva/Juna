<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('modulos/head')
    </head>
    <body>
        
        <section class="fondo-cabecera" id="fondo-cabecera">
            <div class="container">
                @include('modulos/cabecera')
            </div>
        </section>

        <section class="text-center fondo-contenido" id="contenido">
            <div class="container">
                @yield('content')
            </div>
        </section>

        <section class="fondo-pie" id="fondo-pie">
            <div class="container">
                @include('modulos/pie')
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{asset('js/popup.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/popupMaterias.js')}}"></script>

        <!-- jQuery para DataTables -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

        


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
