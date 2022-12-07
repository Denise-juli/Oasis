<?php
    require_once ('class/Roles.php');
    if(  isset($_POST['descripcion']) ){
        $descripcion = $_POST['descripcion'];
        echo $descripcion;

        $rol = new Rol();
        $rol->setDescripcion($descripcion);

        $rol->crear();

        header('location: roles/index.php');
    }

?>