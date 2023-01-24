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
        $fk_servicio = $_GET['id'];
        $contenido = $_POST['comentario'];
        $calificacion = $_POST['calificacion'];
        $model->addComentario($contenido, $calificacion, $fk_servicio);
        header("Location:../detalle/ver?id=$fk_servicio");
        
    }


    }

?>