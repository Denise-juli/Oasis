<?php
 /* -------------------------------------------------------------------------- */
 /*                             CONTROLADOR FRONTAL                            */
 /* -------------------------------------------------------------------------- */
require_once('core/manejador.php');
require_once('core/ConexionPDO.php');

try {
    $ConexionDB = new ConexionDB();
} catch(PDOException $e) {
    echo 'Ha ocurrido un error';
    exit;
}


//require_once('controllers/indexController.php');
 // Recibir las solicitudes del usuario y con ayuda del manejador obtiene la url de los recusos solicitados
 $datos = obtener_url();

    $controlador = $datos[0];
    $metodo = $datos[1];
    $parametros = $datos[2];

    // 1. Creo la ruta dinamicamente
    $ruta = '/controllers/'. $controlador .'.php';
   $path = dirname(__FILE__, 1);
   $variable = $path . $ruta;
   
    // 2. Verifico la ruta que el archivo exista
    // 3. Cargo el archivo
    // 4. Instancion el objeto
    if(  file_exists($variable) ){
        require_once($variable);

        // Crea el objeto
        $controladorObjeto = new $controlador();
        
        // Verificar que el metodo exista
        if(  method_exists($controladorObjeto, $metodo)  ){
            $controladorObjeto->{$metodo}();
        } else {
            echo ' El method no Existe';
        }

    } else {
        echo 'El controlador no Existe';
    }


?>