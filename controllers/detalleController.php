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

?>