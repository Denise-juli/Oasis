<?php

    require_once('../models/turnoModel.php');

    class TurnoController{
        public $turno_id;
        public $caracteristica;
        public $fecha_res;
        public $fk_usuario_id;
        public $fk_compra_id;

        public function index( $parametros = array() ){
            $turno = new TurnoModel();
            $lista = $turno->lista();

    
            require_once('views/turnoABMView.php');
          

            // print_r($lista);
            //echo '<h1> Renderizo Vista</h1>';
        }

        public function crear( $parametros = array() ){
            // Recibo las variables por POST
            print_r( $parametros  );
            echo 'Crear usuario';

            // Intancio el modelo 

            // Ejecuto las querys
        }

        public function actualizar($parametros = array()){
            print_r( $parametros  );
            echo 'Actulizando';
        }

        public function eliminar( $parametros = array() ){
            print_r( $parametros  );
            echo 'Eliminando usuario';
        }
    }

?>

