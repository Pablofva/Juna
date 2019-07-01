@extends('plantilla')

@section('seccion')
	


<!DOCTYPE html>
<html lang="es">
<head>
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="login-box">
		<form action="" method="POST" autocomplete="off" class="logInForm">
			<p class="login-titulo">Inicia sesión con tu cuenta</p>
			<div class="form-group label-floating">
			  <label class="control-label" for="UserName">Usuario</label>
			  <input class="form-control" id="UserName" type="text" name="usuario">
			  <p class="help-block">Escribe tú nombre de usuario</p>
			</div>

			<div class="form-group label-floating">
			  <label class="control-label" for="UserPass">Contraseña</label>
			  <input class="form-control" id="UserPass" type="password" name="clave">
			  <p class="help-block">Escribe tú contraseña</p>
			</div>
			<div class="form-group text-center">
				<input type="submit" value="Iniciar sesión" class="btn btn-info" style="color: #FFF;">
			</div>
		</form>
	</div>
<?php
	if(isset($_POST['usuario']) && isset($_POST['clave'])){
		require_once "./controlador/loginControlador.php";
		$login = new loginControlador();
		echo $login->iniciar_sesion_controlador();
	}
?>



	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>


@endsection