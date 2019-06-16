
<?php
$numero=$_POST['test'];
// echo "este es mi numero",$numero;
require_once '.\core\mainModel.php';
$mate= new mainModel();
// ARREGLO CON INFORMACION DE LAS MATERIAS Y SU COMISION
 $arreglo_mate_comi=$mate->get_materias($numero);

// ARREGLO CON LA INFORMACION COMPLETA DE LAS COMISIONES

$arreglo_comi_com=$mate->get_materias_completo($numero);
?>
<!-- RECORRE EL ARREGLO DE COMISIONES CON INFORMACION COMPLETA Y LOS PROYECTA -->
<!-- ROW PRINCIPAL -->
<?php foreach($arreglo_mate_comi as $comision):?>
<div class="row py-4 container ml-1">
    <div class="col-md-3  fondo_materia ">
    <!-- ROW SECUNDARIO -->
                
                <DIV class="d-flex flex-column justify-content-center h-100  align-items-center ">
                <P CLASS="materia"><?php  echo $comision['materia'];?></P>

                    <P CLASS="comision"><?php  echo 'PROFESOR:',$comision['profesor'];?></P>
                    <P CLASS="comision"> <?php  echo 'COMISION:',$comision['comision'];?></P>
                
                </div>
        
            
        
    </div>
    <div class="col-md-4 fondito">
    <?php foreach($arreglo_comi_com as $dia_hora):?>
        <?php  if($comision['comision']==$dia_hora['comision']){?>  
        <div class="row">
        <div class="col-sm-12">
            <i class="fas fa-star"></i>
            <?php  echo $dia_hora['dias_horarios'];?>
        
        </div>
        <div class="col-sm-6">
            <b>AULA </b><?php  echo $dia_hora['aula'];?>
        </div>
        <div class="col-sm-6">
            <b>EDIFICIO </b><?php  echo $dia_hora['edificio'];?>
        </div>
        <div class="col-sm-6">
            <b>SEDE </b><?php  echo $dia_hora['sede'];?>
        </div>
        </div>
            <?php }?>    
    <?php endforeach; ?>  
    </div>
    <div class="col-md-2 ">
        <div class="d-flex flex-column justify-content-center h-100  align-items-center py-2">
        <button type="button" class="btn btn-success btn-circle btn-lp"><P class="letrasCirculoMapa">MAPA</P></button>
        </div>
    </div>
</div>
<?php endforeach; ?> 