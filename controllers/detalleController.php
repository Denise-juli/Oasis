<?php

   

require_once('models/servicioModel.php');
class DetalleController {

    public function index(){
       // session_start();

         $id = $_GET['id'];

             $model = new servicioModel();

               $listaServicios = $model->ver($id);
               $comentarios = $model->comentariosPorServicio($id);
     
              
              require_once('views/header.php'); 
              require_once('views/detalle.php');
    }



   

    }

?>