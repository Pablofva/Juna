<?php
    //  require_once "./core/configAPP.php"
    class mainModel{
        protected $enlace;
        // CONECCION A LA BASE DE DATOS
        
        protected function conectar(){
            $enlace= new PDO('mysql:host=localhost;dbname=aulas_db','root','');
            return $enlace;
            }
        // ARMA LOS ARREGLOS
        protected function ejecutar_consulta_simple($sql){
            $sentencia=$this->conectar()->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            return $resultado;
            $enlace=null;
        }
         // ARMA LOS JSON
         protected function ejecutar_json($sql){
        
            $sentencia=$this->conectar()->prepare($sql);
            $valor=$sentencia->execute();
            if($valor){
                while($result=$sentencia->fetch(PDO::FETCH_ASSOC)){
                    $data["data"][]=$result;
                }
            }
            $sentencia->closeCursor();
            return $data;
            $enlace=null;
        }
        // RETORNA LAS INSTITUTOS
        public function get_institutos(){

            $sql="select * from carrera";
            return $this->ejecutar_json($sql);
        }
        // RETORNA LAS CARRERAS EN JSON
        public function get_carreras($numero){

            $sql="select * from carrera where ID_INSTITUTO=".$numero;
            
            echo json_encode($this->ejecutar_json($sql));
        
        }
        // RETORNA MATERIAS Y SU COMISION SIN REPETIR *PONER EL NOMBRE DEL PROFESOR AQUI PARA QUE NO SE REPITA
        public function get_materias(){

            $sql="select distinct m.nombre as materia,co.numero as comision,p.apellido as profesor
            from comision_completa c
            left join comision co on c.comision_id=co.id
            left join profesores p on c.profesor_id=p.id
            left join aula a on c.aula_id=a.id
            left join materia m on co.id_materia=m.id
            left join edificio e on a.id_edificio=e.id
            left join sede s on e.id_sede=s.id
            ";
            return $this->ejecutar_consulta_simple($sql);


        }
        // RETORNA LAS COMISIONES CON INFORMACION COMPLETA
        public function get_materias_completo(){

            $sql="select c.dias_horarios,m.nombre as materia,co.numero as comision,p.apellido as profesor,a.nombre as aula,e.nombre as edificio,s.nombre as sede
            from comision_completa c
            left join comision co on c.comision_id=co.id
            left join profesores p on c.profesor_id=p.id
            left join aula a on c.aula_id=a.id
            left join materia m on co.id_materia=m.id
            left join edificio e on a.id_edificio=e.id
            left join sede s on e.id_sede=s.id
            ";
            return $this->ejecutar_consulta_simple($sql);


        }
     }
    