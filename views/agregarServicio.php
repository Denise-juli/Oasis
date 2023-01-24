<?php

if( mysqli_connect("localhost","root","","bd_oasis") ){

	$con = mysqli_connect('localhost','root','','bd_oasis' );

		
		if( isset($_POST["nombre"]) ){
			$nombre = $_POST["nombre"];

		}if( isset($_POST["descripcion"]) ){
                $descripcion = $_POST["descripcion"];

		}if( isset($_POST["precio"]) ){
                    $precio = $_POST["precio"];

		}if( isset($_POST["foto"]) ){
						$foto = $_POST["foto"];

		$consulta = "INSERT INTO servicio (nombre, descripcion, precio, foto) VALUES ( '$nombre', '$descripcion', '$precio', '$foto')";
		
		}if ( mysqli_query($con, $consulta) ){
				
				
		} else {
			echo "La consulta tiene errores";
		}
	} else {
	
	}

    echo "agregada";
		

?>