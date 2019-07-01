<!DOCTYPE html>
<html>
<head>
	
<meta charset="UTF-8">
<title>buscador_unaj</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!--<link rel="stylesheet" href="css/bootstrap.min.css">-->

<link	rel="stylesheet"	type="text/css"	href="/css/estilos.css">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<!--iconos-->
<script src="js/all.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	
	<!-- Cabecera --> 
	<section class="encabezado text-center">
		<div class="container">
			@yield('cabecera')
		</div>
	</section>
	<!-- Contenido de la página, dentro de la section wrapper --->
	<section class="wrapper text-center">
		<div class="container ">
			@yield('seccion')
		</div>
	</section>
	<section class="pie text-center py-2">
	<!-- Pie de página --->
			@yield('pie')
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</body>
</html>