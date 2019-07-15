<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet"	type="text/css"	href="{{asset('css/estilos.css')}}">
    <!--iconos-->
    <script src="js/all.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <section class="encabezado text-center">

      <header class="cabeza">
  
          <h1>Sistemas de gestion de aulas</h1>
  
      </header>

    </section>
    <section class="wrapper text-center">

      <div class="container">
        @yield('seccion')
      
      </div>
    </section>
    <section class="pie text-center py-2">
        <div class="container">
          <p>Universidad Nacional Arturo Jauretche</p>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <script type="text/javascript" src="js/carrusel.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/filtro.js"></script>
    <script type="text/javascript" src="{{asset('js/filtroComision.js')}}"></script>
    <!-- <script type="text/javascript" src="{{asset('js/mapita.js')}}"></script> -->
    <script type="text/javascript" src="{{asset('js/imagenMapa.js')}}"></script>
    <!-- <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap')}}"></script> -->

  </body>
</html>