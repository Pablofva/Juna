<?php
  require_once '../core/mainModel.php';
 $numero=$_GET['q'];
//  echo 'alto numero :',$numero;
 $carre= new mainModel();
// ARREGLO CON INFORMACION DE LAS MATERIAS Y SU COMISION
 $carre->get_carreras($numero);
// ARREGLO CON LA INFORMACION COMPLETA DE LAS COMISIONES
// echo "holaaaaaaaaaaaaaaa";


?>