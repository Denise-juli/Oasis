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

            if( isset($_POST["descripcion"]) ){
                $descripcion = $_POST["descripcion"];

                if( isset($_POST["precio"]) ){
                    $precio = $_POST["precio"];

					if( isset($_POST["foto"]) ){
						$foto = $_POST["foto"];

		
		// 3. Ejecutar una consulta SQL
		$consulta = "INSERT INTO servicio (nombre, descripcion, precio, foto) VALUES ( '$nombre', '$descripcion', '$precio', '$foto')";
		
		if ( mysqli_query($con, $consulta) ){
				
				
		} else {
			echo "La consulta tiene errores";
		}
	} else {
	
	}

    echo "agregada";
		

?>