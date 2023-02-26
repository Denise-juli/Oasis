
<?php

   


class RegistroController {

    public function index(){


        require_once('views/registro.html');
    }

    }
    class UserRegistration {
        private $servername = "localhost";
        private $username = "usuario_id";
        private $email = "email";
        private $password = "password";
        private $fecha_nac = "fecha_nac";
        private $telefono = "telefono";
        private $dbname = "bd_oasis";
        private $conn;
    
        function __construct() {
            // create database connection
            $this->conn = new mysqli($this->servername, $this->username, $this->email,$this->fecha_nac, $this->telefono, $this->password, $this->dbname);
    
            // check connection
            if ($this->conn->connect_error) {
                die("Conexion fallida: " . $this->conn->connect_error);
            }
        }
    
        function registerUser($nombre, $apellido, $email, $password) {
            // validate the form data
            if (empty($nombre) || empty($apellido) || empty($email) || empty($fecha_nac) || empty($telefono)|| empty($password)) {
                return "Por favor, complete todos los campos.";
            } else {
                // hash the password for security
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
                // check if email already exists
                $stmt = $this->conn->prepare("SELECT * FROM usuario WHERE email=?");
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();
    
                if ($result->num_rows > 0) {
                    return "El email ya eiste. Por favor, seleccione otro.";
                } else {
                    // insert the user into the database
                    $stmt = $this->conn->prepare("INSERT INTO usuario (nombre, email, password, fecha_nac, telefono) VALUES (?, ?, ?)");
                    $stmt->bind_param("sss", $nombre, $apellido, $email, $fecha_nac, $telefono, $hashed_password);
                    if ($stmt->execute()) {
                        return "Registrado exitosamente!";
                    } else {
                        return "Registro fallido.";
                    }
                }
            }
        }
    
        function __destruct() {
            // close the database connection
            $this->conn->close();
        }
    }
?>