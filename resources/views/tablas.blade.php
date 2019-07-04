<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container my-4">
        @php
            $notas = App\Resultados::all();
        @endphp
      <h1 class="display-4"> Notas </h1>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripcion</th>
          </thead>
          <tbody>
              @foreach ($notas as $item)

            <tr>
              <th scope="row">{{$item->id_instituto}}</th>
              <td>
              <a href="">{{$item->id_carreras}}</a>
              </td>
              <td>{{$item->id_instituto}}</td>
              <td></td>
            </tr>
              @endforeach
          </tbody>
        </table>
        {{-- @php
            $notass = DB::table('notas')->get();
        @endphp
            @foreach ($notass as $item)

              <h1>Lo obtenido es: {{ $item->nombre}}</h1>
                
            @endforeach --}}

      {{-- @if (!empty($nota))
          @switch($nota)
              @case($nota->id == '1')
                  <h2>{{ $nota->nombre}} se sacó una {{ $nota->descripcion }}</h2>
                  @break
              @case($nota->id == '2')
                  <h2>{{ $nota->nombre}} se sacó una {{ $nota->descripcion }}</h2>
                  @break
              @default
                  <h2>Nada</h2>
          @endswitch
      @endif --}}
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>