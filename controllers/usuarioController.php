<?php
    require_once('models/usuarioModel.php' );


    class UsuarioController{
        public $nombre;
        //public $apellido;
        public $password;
        public $email;
        public $puntos;
        // public $telefono;
        //public $fecha_nac;
        //public $usuario_id;
 

        public function index( $parametros = array() ){
  
            require_once('views/usuarioView.php');
            echo '<h1> Inicio Usuario</h1>';

          
        }

        public function crear( $parametros = array() ){
            // Recibo las variables por POST
            print_r( $parametros  );
            echo 'Crear usuario';

            // Intancio el modelo 

            // Ejecuto las querys
        }

        
        public function actualizar(){

            $id = $_GET['id'];

            $modelAct = new UsuarioModel();
    
          //  $abm = $modelAct->actualizar($id);
    
             require_once('views/usuarioEditar.php');
    
        }

  
        public function modificar ($parametros = array()){
           
            $oldEmail = $_POST['oldEmail'];
            $email = $_POST['email'];
            $nombre = $_POST['nombre'];
          
            $apellido = $_POST['apellido'];
            $fecha_nac = $_POST['fecha_nac'];
            $puntos = $_POST['puntos'];
            $fk_tipo_id = $_POST['fk_tipo_id'];
            $telefono = $_POST['telefono'];
            
            $model = new UsuarioModel();
            $model->actualizar($nombre, $apellido, $email, $telefono,$fecha_nac, $puntos, $fk_tipo_id);
            header('Location: ../indexABM');
            
            }
        


        public function login( $parametros = array() ){
            if( !isset( $_POST['email'] )  && !isset( $_POST['password']) ){
                return;
            }
            // Recibo las variables por POST
            $email = $_POST['email'];
            $password = $_POST['password'];
            // Intancio el modelo 
            $usuario = new UsuarioModel();
            $usuario->email = $email;
            $usuario->password =  $password  ;
            //echo (  sha1('admin') );
            // Ejecuto el method del modelo
            $resultado = $usuario->login();
            print_r($resultado[1]);
            //print_r($usuario);

            if( count( $resultado ) > 0  ) {
                echo 'Datos validos';
                session_start();
                $_SESSION['email'] = $resultado[0]['email'];
          
                header('Location: ../index');
            } else {
                echo 'Usuario o contraseña invalidos';
            }


        }
        public function logout( $parametros = array() ){
            session_start();
            unset( $_SESSION['email'] );
            session_unset();
            session_destroy();
            echo('<meta http-equiv="refresh" content="3; url=../usuario">');
            echo( '<h2> Sesion cerrada, en 3 segundos...</h2>');

        }


        public function registro( $parametros = array() ){
            if( !isset( $_POST['email'] )  && !isset( $_POST['password'])){
                return;
            }
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $fecha_nac = $_POST['fecha_nac'];
            $dateToFormat = date_create($fecha_nac);
            $dateFormated = date_format($dateToFormat, "Y-m-d");
            $puntos = 10;
            $tipo = 2;
            // Intancio el modelo 
            $usuario = new UsuarioModel();

            $usuario->nombre = $nombre;
            $usuario->apellido = $apellido;
            $usuario->email = $email;
            $usuario->password = $password;
            $usuario->fecha_nac = $fecha_nac;
            $usuario->telefono = $telefono;
            $usuario->puntos = $puntos;
            $usuario->fk_tipo_id = $tipo;
            
            $usuario->registro();
            // Voy al login
            header('Location: ../index');


            if( isset($_GET[$fk_tipo_id = '1'])){
                header('Location: ../indexABM');
            }
            if( isset($_GET[$fk_tipo_id = '2'])){
                header('Location: ../index');
            }
            //var_dump($_SESSION);
            
                        
                    }
            
        


       





        public function eliminar( $parametros = array() ){
            print_r( $parametros  );
            echo 'Eliminando usuario';
        }
    }


?>
