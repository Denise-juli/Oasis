<?php

    require_once( 'ConexionDB.php');
    class Rol extends ConexionDB {
        // Atributos
        private $descripcion;
        private $id;



        public function crear(){
            $this->setQuery("INSERT INTO roles(descripcion)
                            VALUES(:descripcion)");
            $this->ejecutar( array(
                ':descripcion' => $this->descripcion,
            ));
            
        }
        public function actualizar(){
            $this->setQuery("UPDATE roles
                             SET descripcion = :descripcion
                             WHERE id_rol = :id");
            $this->ejecutar( array(
                ':descripcion' => $this->descripcion,
                ':id' => $this->id
            ));
            
        }

        public function borrar(){
            $this->setQuery("DELETE FROM roles WHERE id_rol = :id");
            $this->ejecutar( array(
                ':id' => $this->id,
            ));
        }

        public function listar(){
            $this->setQuery("SELECT id_rol, descripcion FROM roles");

            $resultado = $this->obtenerRow();
            return $resultado;
        }

        public function getDescripcion() {
            return $this->descripcion;
        }


        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
            
        }


        public function getId(){
            return $this->Id;
        }


        public function setId($id){
            $this->id = $id;
            
        }




    }

    

?>