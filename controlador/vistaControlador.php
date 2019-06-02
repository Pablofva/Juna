<?php
	require_once "./model/vistaModelo.php";

	class vistaControlador extends vistaModelo
	{
		// Funcion de prueba que obtiene la plantilla
		public function obtener_plantilla_controlador()
		{
			return require_once "vista/plantilla.php";
		}


		/* 
			Funcion que obtiene la vista actual de la barra del navegador
			y se la pasa al vistaModelo para tratar el dato.
		*/
		public function obtener_vista_controlador()
		{
			if (isset($_GET['views'])) 
			{
				$ruta = explode("/", $_GET['views']);
				$ruta1 = explode(".", $ruta[0]);
				$respuesta = vistaModelo::obtener_vista_modelo($ruta1[0]);
				#$respuesta = vistaModelo::obtener_vista_modelo(end($ruta));

			}
			else
			{
				$respuesta = "login";
			}
			return $respuesta;
		}

	}