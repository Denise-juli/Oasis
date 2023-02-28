<?php
    class indexController{

       
        public function index(){
            require_once('views/header.php');
            require_once('views/index.html');
        }

        public function loguear(){
            echo '<h2> inciando login</h2>';
        }

        public function logout(){
            echo '<h2> Finalizando sesion</h2>';
        }

    }


?>