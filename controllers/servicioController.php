
<?php

   
require_once('models/servicioModel.php');


class ServicioController{
    public $nombre;
    public $servicio_id;
    public $precio;
    public $descripcion;
    public $foto;
        
        public function index( $parametros = array() ){

            $servicio = new servicioModel();
           require_once('views/header.php');
            require_once('views/servicios.php');

        
        }
        
        public function ver(){
           
            $id = $_GET['id'];

             $model = new  servicioModel();

               $listaServicios = $model->ver($id);
               $comentarios = $model->comentariosPorServicio($id);
     
              
             // require_once('views/header.html'); 
              require_once('views/detalle.php');
         
             
        }


        public function addComentario(){

            $model = new ServicioModel();
            $servicio_id = $_GET['fkid'];
            $contenido = $_POST['comentario'];
            $calificacion = $_POST['calif'];
      
            $model->addComentario($contenido, $calificacion, $servicio_id);
            header("Location:../servicio/ver?id=$servicio_id");
            
        }


        public function crear( $parametros = array() ){
            print_r( $parametros  );
            echo 'Crear servicio';
        }
        
        public function actualizar($parametros = array()){
            $id = $_GET['id'];
            $modelAct = new ServicioModel();
            require_once('views/servicioEditar.php');
        }

        public function modificar ($parametros = array()){
        $servicio_id = $_POST['servicio_id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $foto = $_POST['foto'];
           
        $model = new ServicioModel();
        $model->actualizar($servicio_id, $nombre, $descripcion, $precio, $foto);
        header('Location: ../indexABM');
        
        }

        public function eliminar( $parametros = array() ){
            echo 'Eliminando servicio';
        }

        


    }

?>