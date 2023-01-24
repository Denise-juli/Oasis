<?php
require_once('core/manejador.php');
require_once('core/ConexionPDO.php');

try {
    $ConexionDB = new ConexionDB();
} catch(PDOException $e) {
    echo 'Ha ocurrido un error';
    exit;
}

 $datos = obtener_url();

    $controlador = $datos[0];
    $metodo = $datos[1];
    $parametros = $datos[2];
    $ruta = '/controllers/'. $controlador .'.php';
   $path = dirname(__FILE__, 1);
   $variable = $path . $ruta;
   
    if(  file_exists($variable) ){
        require_once($variable);
        $controladorObjeto = new $controlador();
        
        if(  method_exists($controladorObjeto, $metodo)  ){
            $controladorObjeto->{$metodo}();
        } else {
            echo ' El method no Existe';
        }

    } else {
        echo 'El controlador no Existe';
    }


?>