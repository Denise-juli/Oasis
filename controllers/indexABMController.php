
<?php

   require_once('models/usuarioModel.php');


class IndexABMController {

    public function index(){

        session_start();

        $abm = new UsuarioModel();
        
        require_once('views/indexABM.php');

    }

    }

?>