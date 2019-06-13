<!DOCTYPE html>
<html>
<head>
	<?php include "vista/modulos/head.php"; ?>
</head>
<body>
	
	

	<!-- Cabecera --> 
	<section class="encabezado text-center">
		<div class="container">

			<?php include "vista/modulos/cabecera.php"; ?>
		</div>
	</section>
	<!-- Contenido de la página, dentro de la section wrapper --->
	<section class="wrapper text-center">
		<div class="container ">
		<?php
		require_once "controlador/vistaControlador.php";

		/*
			Instancia del controlador para realizar la tarea de
			obtención de vista.
		*/
		$vt = new vistaControlador();
		$vistaR = $vt->obtener_vista_controlador();

		/*
			If que controla el resultado, llamando al login.php o
			al archivo que corresponda en la parte del contenido 
			de la pág más abajo.
			Notar que el "else" está separado abajo, y hay una sentencia
			endif para avisar que termina la comprobación.
		*/
		if ($vistaR=="login"):
			require_once "vista/contenidos/login.php";
		else:
	?>
				<?php 
		/*
			Se supone que la plantilla debe tener secciones como la
			barra superior y los botones ya colocados, y aca, en el contenido
			es donde va a cambiar lo que se muestra dependiendo de lo solicitado
			por el usuario
		*/
		require_once $vistaR; 
		endif;
	?>
	</div>
	</section>
	<section class="pie text-center py-2">
		
	<!-- Pie de página --->
			<?php include "vista/modulos/pie.php"; ?>

	
	</section>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>