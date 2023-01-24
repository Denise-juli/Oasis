<?php
function obtener_url(){
    if(  isset( $_GET['url'] )  ){
        $url = $_GET['url'];
    } else {
        $url = 'index/index'; 
    }


    $url = explode( '/', $url);

    $controlar =  isset ($url[0]) ? $url[0] . 'Controller' : 'indexController'  ;
    $metodo =  isset( $url[1] ) ? $url[1]  : 'index';
    $parametros = isset($url[2]) ?  array_slice( $url, 2 ) : array();

    return array( $controlar, $metodo, $parametros );

}

?>