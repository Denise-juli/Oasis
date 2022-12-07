<?php
    if(  isset( $_GET['id'] ) && isset( $_GET['descripcion'] )) {
        $id =  $_GET['id'];
        $descripcion =  $_GET['descripcion'];

    } else {
        $id=0;
        $descripcion = null;
    }
   
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM Roles</title>
    <link rel="shortcut icon" href="public/img/flor.png" type="image/png">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <header class="d-flex justify-content-center align-items-center bg-danger text-light">
        <h1><i class="bi bi-person"></i> ABM de Roles </h1>
    </header>
    <main class="container">
        <div class="row mt-4">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h2 class="text-center text-danger">¿Confirma el Rol?</h2>

                <div class="card p-3">
                    <h3 class="text-center"><?php echo $descripcion; ?> </h3>


                    <div class="row d-flex justify-content-evenly">
                        <a href="roles/rolEliminar.php?id=<?php echo $id; ?>" class="btn btn-outline-danger col-md-4 ">Aceptar</a>
                        <a href="views/index.html" class="btn btn-outline-dark col-md-4">Cancelar</a>
                    </div>

                </div>
            </div>
        </div>

    </main>
    <footer class="d-flex justify-content-center align-items-center bg-dark text-light">
        <p> ABM | <img src="public/img/logo.png" height="40" width="80"></p>
    </footer>
</body>
</html>