<?php  
	require_once "./model/carreras_botonesModelo.php";


	class carreras_botonesControlador extends carreras_botonesModelo
	{

		private $instituto;
		private $carrera;
		private $año;
		private $materia;

		/*public function test()
		{
			if (isset($_GET['views'])) 
			{
				$ruta = explode("/", $_GET['views']);
				$ruta1 = explode(".", $ruta[0]);
				$respuesta =  ;
				#$respuesta = vistaModelo::obtener_vista_modelo(end($ruta));
			}
			else
			{
				$respuesta = "login";
			}
			return $respuesta;
		}*/

		public function obtener_vista_carreras()
		{
			if (isset($_GET['test'])) 
			{
				
				$res = self::traer_vista_carreras($_GET['test']);
				return $res;
			}
		}

		public function traer_vista_carreras($carrera)
		{
			if ($carrera == 1) {
				require_once "./vista/contenidos/carrerasing.php";
			}
			elseif ($carrera == 2) {
				require_once "./vista/contenidos/carrerassal.php";
			}
			else
			{
				require_once "./vista/contenidos/404.php";
			}
		}

	}



