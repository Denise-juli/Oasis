<?php
// 1. El soft de PHP debe identificarse ante MYSQL
if( mysqli_connect("localhost","root","","bd_oasis") ){
	// echo "OK";
	$con = mysqli_connect('localhost','root','','bd_oasis' );
	// 2. Seleccionar una base
	
		// echo "OK";
		
		// LLEGA $_POST["nombre"]
		
		if( isset($_POST["nombre"]) ){
			$nombre = $_POST["nombre"];

            if( isset($_POST["apellido"]) ){
                $apellido = $_POST["apellido"];

                if( isset($_POST["email"]) ){
                    $email = $_POST["email"];

					if( isset($_POST["fk_tipo_id"]) ){
						$acceso = $_POST["fk_tipo_id"];

		
		// 3. Ejecutar una consulta SQL
		$consulta = "INSERT INTO usuario (nombre, apellido, email, fk_tipo_id) VALUES ('$nombre', '$apellido', '$email', '$acceso')";
		
		if ( mysqli_query($con, $consulta) ){
				
				
		} else {
			echo "La consulta tiene errores";
		}
	} else {
	
	}

    echo "agregada";
		

?>