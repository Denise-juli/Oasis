<?php
    require_once '../core/ConexionPDO.php';



    class UsuarioModel extends ConexionDB {
        public $usuario_id;
        public $nombre;
        public $apellido;
        public $email;
        public $password;
        public $telefono;
        public $fecha_nac;
        public $puntos;
        public $fk_tipo_id;

        public function guardar(){
            $this->setQuery("INSERT INTO usuarios(nombre, apellido, email, passwordm, puntos, telefono, fecha_nac, fk_tipo_id	)
                            VALUES(:nombre,:apellido, :email, :password, :puntos, :telefono, :fk_tipo_id	)");
            $this->ejecutar(array(
                ':nombre' => $this->nombre,
                ':apellido' => $this->apellido,
                ':email' => $this->email,
                ':password' => $this->password,
                ':puntos' => $this->puntos,
                ':telefono' => $this->telefono,
                ':fk_tipo_id' => $this->fk_tipo_id	
                
            ));
        }





        public function eliminar(){
            $this->setQuery("DELETE usuario
                             WHERE usuario_id = :usuario_id");
            
            $this->ejecutar(array(
                ':usuario_id' => $this->usuario_id,
            ));
        }

        public function login(){
            $this->setQuery("SELECT  nombre, email, password
                             WHERE email = :email AND password = :password");
            $this->obtenerRow(array(
                ':nombre' => $this->nombre,
                        ':email' => $this->email,
                        ':password' => $this->password
            ));
        }

        

    }
?>