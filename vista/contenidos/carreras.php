<?php  
	include "./controlador/botonesControlador.php";

	if (isset($_POST['test'])) {
		$ah = $_POST['test'];
	}
	else
	{
		$ah = 0;
	}
	
	$carreras = new botonesControlador();
	#$res = $carreras->obtener_vista_carreras();
	$carreras->traer_vista_carreras($ah);

?>

