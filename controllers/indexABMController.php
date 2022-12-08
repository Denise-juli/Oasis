
<?php

   require_once('models/usuarioModel.php');
   require_once('models/servicioModel.php');

class IndexABMController {

    public function index(){

        session_start();

        $abm = new UsuarioModel();
        $servicio = new ServicioModel();
        require_once('views/indexABM.php');

    }

    public function actualizar(){
        $id = $_GET['id'];
        $modelAct = new UsuarioModel();

        $abm = $modelAct->actualizar($id);

         require_once('views/usuarioEditar.html');
    

    }


    }

?>