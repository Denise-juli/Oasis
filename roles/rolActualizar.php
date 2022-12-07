<?php
    require_once ('class/Roles.php');
    if(  isset($_POST['descripcion'])  && isset(  $_POST['id'] )  ){
        $descripcion = $_POST['descripcion'];
        $id = $_POST['id'];
        echo $descripcion;

        $rol = new Rol();
        $rol->setDescripcion($descripcion);
        $rol->setId($id);


        $rol->actualizar();

        header('location: index.php');
    }

?>