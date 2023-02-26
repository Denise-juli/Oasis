
<?php

   


class LogInController {

    public function index(){


        require_once('views/logIn.html');
    }

    }
    class SessionManager {
        private $localhost;
        private $usuario_id;
        private $password;
        private $email;
        private $db_aosis;
    
        function __construct($localhost, $usuario_id, $password, $email, $db_aosis) {
            $this->localhost = $localhost;
            $this->usuario_id = $usuario_id;
            $this->password = $password;
            $this->email = $email;
            $this->db_aosis = $db_aosis;
            session_start();
        }
    
        function login($usuario_id, $password, $email) {
            // connect to the database
            $conn = new mysqli($this->localhost, $this->usuario_id, $this->password, $this->email, $this->db_aosis);
    
            // check connection
            if ($conn->connect_error) {
                die("Conexion fallida: " . $conn->connect_error);
            }
    
            // check if user exists
            $stmt = $conn->prepare("SELECT * FROM usuario WHERE usuario_id=?");
            $stmt->bind_param("s", $usuario_id);
            $stmt->execute();
            $result = $stmt->get_result();
    
            if ($result->num_rows == 1) {
                // verify password
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['password'])) {
                    // set session variables
                    $_SESSION['loggedin'] = true;
                    $_SESSION['usuario_id'] = $usuario_id;
                    return true;
                }
            }
    
            return false;
        }
    
        function logout() {
            // unset session variables
            $_SESSION = array();
            session_destroy();
        }
    
        function isLoggedIn() {
            return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true;
        }
    }
?>