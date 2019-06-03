
<?php
require_once "./core/mainModel.php";
$mate= new mainModel();
$arregloMate=$mate->get_materias();



?>

<!-- RECORRE EL ARREGLO DE COMISIONES CON INFORMACION COMPLETA Y LOS PROYECTA -->
<?php foreach($arregloMate as $fila):?>
<div class="row py-4">
    <div class="col-sm-4 col-sm-3 fondo_materia ">
        <div class="d-flex flex-column justify-content-center h-100  align-items-center">
            <?php  echo $fila['materia'];?>
        </div>
    </div>
    <div class="col-sm-4 col-sm-3">
       <b>comision </b> <?php  echo $fila['comision'];?><br>
        <b>horario </b><?php  echo $fila['dias_horarios'];?><br>
        <b>profesor </b><?php  echo $fila['profesor'];?><br>
        <b>aula </b><?php  echo $fila['aula'];?><br>
        <b>edificio </b><?php  echo $fila['edificio'];?><br>
        <b>sede </b><?php  echo $fila['sede'];?>
    </div>
    <div class="col-sm-4 col-sm-3 ">
        <div class="d-flex flex-column justify-content-center h-100  align-items-center">
            <button class="btn btn-danger">ver mapa</button>
        </div>
    </div>


</div>
<?php endforeach; ?> 