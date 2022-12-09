<?php
    require_once 'core/ConexionPDO.php';



    try {
        $ConexionDB = new ConexionDB();
    } catch(PDOException $e) {
        echo 'Ha ocurrido un error';
        exit;
    }

    class ServicioModel extends ConexionDB {

        public $servicio_id;
        public $nombre;
        public $descripcion;
        public $precio;
        public $foto;
 

        public function listar(){
            $this->setQuery("SELECT servicio_id, nombre, descripcion,  precio, foto
                            FROM servicio");
            $resultado = $this->obtenerRow();
            return $resultado;

        }
/*MODIFICADO AYE 27/11 */ 
        public function guardar(){
            $this->setQuery("INSERT INTO servicio (servicio_id, nombre, descripcion, precio, foto)
            VALUES(:servicio_id, :nombre, :descripcion, :precio, :foto)");
            $this->ejecutar(array(
                ':servicio_id' => $this->servicio_id,
                ':nombre' => $this->nombre,
                ':descripcion' => $this->descripcion,
                ':precio' => $this->precio,
                ':foto' => $this->foto,
            ));
        }

/*MODIFICADO AYE 27/11 */ 
        public function eliminar(){
            $this->setQuery("DELETE FROM servicio
                             WHERE servicio_id = :servicio_id");
                    $this->ejecutar(array(
                        ':servicio_id' => $this->servicio_id,
                    ));
    }

/*MODIFICADO AYE 27/11 */ 
    public function actualizar(){
        $this->setQuery("UPDATE servicio
                        SET nombre = :nombre, 
                        descripcion = :descripcion,
                        precio = :precio
                        WHERE servicio_id = :servicio_id");
        $this->ejecutar(array(
                        ':nombre' => $this->nombre,
                ':descripcion' => $this->descripcion,
                ':precio' => $this->precio,
                ':foto' => $this->foto,
        ));               
    }


    public function ver($id){
        $stament = $this->setQuery("SELECT * FROM servicio where servicio_id = $id;");
        return $this->obtenerRow();
    }

// Desconecar DB
private function desconectar(){
    $this->objPDO = null;
}
    }

