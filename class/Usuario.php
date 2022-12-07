<?php

    require_once( 'ConexionDB.php');
    class Usuario extends ConexionDB {
        // Atributos
        private $nombre;
        private $apellido;
        private $email;
        private $password;


        public function crear(){
            $this->setQuery("INSERT INTO usuarios(nombre, apellido, email, password)
                            VALUES(:nombre, :apellido, :email, :password)");
            $this->ejecutar( array(
                ':nombre' => $this->nombre,
                ':apellido' => $this->apellido,
                ':email' => $this->email,
                ':password' => $this->password
            ));
            
        }

        public function login(){
            $this->setQuery("SELECT usuarios(nombre, apellido, email)
                            WHERE email = $this->email AND password = $this->password");
            $this->obtenerRow();
        }

        public function getNombre() {
            return $this->nombre;
        }


        public function setNombre($nombre){
            $this->nombre = $nombre;
            
        }


        public function getApellido(){
            return $this->apellido;
        }


        public function setApellido($apellido){
            $this->apellido = $apellido;
            
        }


        public function getEmail(){
            return $this->email;
        }


        public function setEmail($email){
            $this->email = $email;
            
        }


        public function getPassword(){
            return $this->password;
        }


        public function setPassword($password){
            $this->password = $password;
            
        }



    }

    

?>