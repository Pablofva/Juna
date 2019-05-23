<?php
    require_once "core/configGeneral.php";

    require_once "controlador/vistaControlador.php";

    $plantilla = new vistaControlador();
    $plantilla->obtener_plantilla_controlador();
?>
