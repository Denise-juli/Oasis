
<?php

   
require_once('models/servicioModel.php');


class ServicioController{
    public $nombre;
    public $servicio_id;
    public $precio;
    public $descripcion;
    public $foto;
        
        public function index( $parametros = array() ){
            $servicio = new ServicioModel();
            $listaServicios = $servicio->listar();

            require_once('views/servicios.html');




           /* session_start();

            if ( isset( $_SESSION['email'] )) {
                require_once('../models/servicioModel.php');
                $model =new  ServicioModel();
                $listaServicios = $model->listarServicios();
                $email = $_SESSION['email'];
    
    
                require_once('../views/serviciosView.php');
            } else {
                require_once('../views/accesoRestringidoView.php');
            } */


        
        }
        
        public function ver(){
            $id = $_GET['id'];
             $model =new  servicioModel();
             $productoArr = $model->ver($id);
            
             
         
             
        }

        public function crear( $parametros = array() ){
            // Recibo las variables por POST
            print_r( $parametros  );
            echo 'Crear usuario';

            // Intancio el modelo 

            // Ejecuto las querys
        }

        public function actualizar($parametros = array()){
            print_r( $parametros  );
            echo 'Actualizado';
        }

        public function eliminar( $parametros = array() ){
            print_r( $parametros  );
            echo 'Eliminando usuario';
        }
    }

?>