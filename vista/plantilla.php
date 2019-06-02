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

						$vt = new vistaControlador();
						$vistaR = $vt->obtener_vista_controlador();


						if ($vistaR=="login" || $vistaR=="404")
						{
							if ($vistaR=="login") 
							{
								require_once "vista/contenidos/login.php";
							}
							else
							{
								require_once "vista/contenidos/404.php";
							}
						}
						else
							{
								require_once $vistaR; 
							}
					?>
				</div>
			</section>

		<!-- Pie de página --->
			<section class="pie text-center py-2">

				<?php include "vista/modulos/pie.php"; ?>

			</section>

	</body>
</html>