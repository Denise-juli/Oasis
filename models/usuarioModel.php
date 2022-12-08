<?php
    require_once 'core/ConexionPDO.php';



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
            $this->setQuery("INSERT INTO usuario(nombre, apellido, email, passwordm, puntos, telefono, fecha_nac, fk_tipo_id	)
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


//MODIFICAR

//listar

public function listar(){
    $this->setQuery("SELECT usuario_id, nombre, apellido,  email, telefono, fecha_nac, puntos, fk_tipo_id
                    FROM usuario");
    $resultado = $this->obtenerRow();
    return $resultado;

}

public function actualizar(){
    $this->setQuery("UPDATE usuario
                    SET nombre = :nombre, 
                    apellido = :apellido,
                    email = :email,
                    telefono = :telefono,
                    fecha_nac = :fecha_nac,
                    puntos = :puntos,
                    fk_tipo_id = :fk_tipo_id
                    WHERE usuario_id = :usuario_id;");
    $this->ejecutar(array(
                    ':usuario_id' => $this->usuario_id,
                    ':nombre' => $this->nombre,
                    ':apellido' => $this->apellido,
                    ':email' => $this->email,
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
            $this->setQuery("SELECT email, password, nombre
                            FROM usuario
                            WHERE email = :email AND password = :password;");
            $resultado = $this->obtenerRow(array(
                        ':email' => $this->email,
                        ':password' => $this->password
            ));

            return $resultado;
        }


        public function registro() {
            $this->setQuery("INSERT INTO usuario(nombre,  apellido, email, fecha_nac, telefono, password,  fk_tipo_id, puntos	)
            VALUES(:nombre, :apellido, :email, :fecha_nac, :telefono, :password, :fk_tipo_id, :puntos	)");
$this->ejecutar(array(
':nombre' => $this->nombre,
':apellido' => $this->apellido,
':email' => $this->email,
':fecha_nac' => $this->fecha_nac,
':telefono' => $this->telefono,
':password' => $this->password,
':fk_tipo_id' => $this->fk_tipo_id,	
':puntos' => $this->puntos	

));




        

    }
    }