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

        <section class="text-center pb-5 fondo-contenido" id="contenido">
            <div class="container">
                @yield('content')
            </div>
        </section>

        <section class="fondo-pie" id="fondo-pie">
            <div class="container">
                @include('modulos/pie')
            </div>
        </section>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/popup.js"></script>
    </body>
</html>
