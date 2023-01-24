<?php
if( mysqli_connect("localhost","root","","bd_oasis") ){
	$con = mysqli_connect('localhost','root','','bd_oasis' );
		if( isset($_POST["nombre"]) ){
			$nombre = $_POST["nombre"];

		}if( isset($_POST["apellido"]) ){
                $apellido = $_POST["apellido"];

		}if( isset($_POST["email"]) ){
                    $email = $_POST["email"];

		}if( isset($_POST["fk_tipo_id"]) ){
						$acceso = $_POST["fk_tipo_id"];

		$consulta = "INSERT INTO usuario (nombre, apellido, email, fk_tipo_id) VALUES ('$nombre', '$apellido', '$email', '$acceso')";
		
		}if ( mysqli_query($con, $consulta) ){
				
				
		} else {
			echo "La consulta tiene errores";
		}
	} else {
	
	}

    echo "agregada";
		

?>