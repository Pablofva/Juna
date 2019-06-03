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
        // RETORNA LAS CARRERAS
        public function get_carreras(){

            $sql="select * from carrera";
            return $this->ejecutar_consulta_simple($sql);
        }
        // RETORNA LAS COMISIONES CON INFORMACION COMPLETA
        public function get_materias(){

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
    