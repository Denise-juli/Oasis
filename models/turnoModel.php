<?php
    require_once 'core/ConexionPDO.php';


    class TurnoModel extends ConexionDB {
        public $turno_id;
        public $caracteristica;
        public $fecha_res;
        public $fk_usuario_id;
        public $fk_compra_id;
        


        public function lista(){
            $this->setQuery("SELECT turno_id, caracteristica, fecha_res, fk_usuario_id, fk_compra_id
                            FROM turno");

            $resultado = $this->obtenerRow();
            return $resultado;
        }



        public function guardar(){
            $this->setQuery("INSERT INTO turno(turno_id, caracteristica, fecha_res, fk_usuario_id, fk_compra_id)
                            VALUES(:turno_id, :fecha_res)");
            $this->ejecutar(array(
                ':turno_id' => $this->turno_id,
                ':fecha_res' => $this->fecha_res
            ));
        }

        public function eliminar(){
            $this->setQuery("DELETE FROM turno
                             WHERE turno_id = :turno_id");
            
            $this->ejecutar(array(
                ':turno_id' => $this->turno_id,
            ));
        }


        public function actualizar(){
            $this->setQuery("UPDATE turno
                            SET turno = 'otra cosa'
                            WHERE turno_id = :turno_id");
            $this->ejecutar(array(
                            ':turno_id' => $this->turno_id,
            ));               
        }

    }
?>