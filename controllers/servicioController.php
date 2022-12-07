
<?php

   
require_once('models/servicioModel.php');


class ServicioController{
    public $nombre;
    public $servicio_id;
    public $precio;
    public $descripcion;
    public $foto;
        
        public function index( $parametros = array() ){
           
            session_start();
            
          //   require_once('views/header.php');
           
            $servicio = new ServicioModel();
            $listaServicios = $servicio->listar();

            require_once('views/servicios.php');
        
        }
        
        public function ver(){
            $id = $_GET['id'];
             $model =new  servicioModel();
   
                   //   require_once('views/header.php');
              

               $listaServicios = $model->ver($id);
     
              require_once('views/detalle.php');
         
             
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