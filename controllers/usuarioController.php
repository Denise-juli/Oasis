<?php
    require_once('models/usuarioModel.php' );


    class UsuarioController{
        public $nombre;
        //public $apellido;
        public $password;
        public $email;
        // public $puntos;
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

        
        public function actualizar($parametros = array()){
            print_r( $parametros  );
            echo 'Actulizando';
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
            $nombreUsuario = $_POST['nombre'];
            $apellidoUsuario = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $fecha_nacimiento = $_POST['fecha_nac'];
            $dateToFormat = date_create($fecha_nacimiento);
            $dateFormated = date_format($dateToFormat, "Y-m-d");
            $puntos = 0;
            $tipo = 2;
            // Intancio el modelo 
            $usuario = new UsuarioModel();

            $usuario->nombre = $nombre;
            $usuario->apellido = $apellidoUsuario;
            $usuario->email = $email;
            $usuario->password = $password;
            $usuario->fecha_nac = $fecha_nacimiento;
            $usuario->telefono = $telefono;
            $usuario->puntos = $puntos;
            $usuario->fk_tipo_id = $tipo;
            
            $usuario->registro();
            // Voy al login
            header('Location: ../index');
            
        }


       





        public function eliminar( $parametros = array() ){
            print_r( $parametros  );
            echo 'Eliminando usuario';
        }
    }


?>
