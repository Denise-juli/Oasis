<?php

   


class DetalleController {

    public function ver(){
        session_start();
        $id = $_GET['id']; 
         
          $servicio = new ServicioModel();
          $listaServicios = $servicio->ver($id);

         require_once('views/detalle.php');
    }



    //---------------------COMENTARIOS-----------------------------

    public function addComentario(){

        $model = new ServicioModel();
        $servicio_id = $_GET['servicio_id'];
        $contenido = $_POST['contenido'];
        $calificacion = $_POST['calificacion'];
        $model->addComentario($contenido, $calificacion, $servicio_id);
        $model->comentariosPorServicio($servicio_id);
        header("Location:../detalle/ver?id= $servicio_id");
        
    }




    

    }

?>