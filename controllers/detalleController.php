<?php

   


class DetalleController {

    public function ver(){
        session_start();
        $id = $_GET['id'];
         
          $servicio = new ServicioModel();
          $listaServicios = $servicio->ver($id);

         require_once('views/detalle.php');
    }

    }

class ProductService {
    private $servername = "localhost";
    private $username = "usuario_id";
    private $password = "password";
    private $dbname = "bd_oasis";
    private $conn;

    
    function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    function displayProducts() {
        // connect to the database
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // check connection
        if ($conn->connect_error) {
            die("Conexion fallida: " . $conn->connect_error);
        }

        // fetch products from the database
        $sql = "SELECT * FROM servicio";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Nombre del Servicio: " . $row["nombre"]. " - Precio: $" . $row["precio"]. "<br>";
            }
        } else {
            echo "No se encontro el servicio.";
        }

        $conn->close();
    }
}

// example usage
$product = new ProductService("localhost", "usuario_id", "password", "bd_oasis");
$product->displayProducts();
?>

?>