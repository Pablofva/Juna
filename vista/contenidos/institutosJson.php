<?php
require_once "./core/mainModel.php";
$numero=$_GET['q'];
$carre= new mainModel();
// ARREGLO CON INFORMACION DE LAS MATERIAS Y SU COMISION
 $arreglo_carreras=$carre->get_carreras($numero);
// ARREGLO CON LA INFORMACION COMPLETA DE LAS COMISIONES
echo json_encode($arreglo_carreras);



?>