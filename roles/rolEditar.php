<?php
    if( isset( $_GET['id'] ) ) {
        $id =  $_GET['id'];
    } else {
        $id = 0;
    }

    if(  isset( $_GET['descripcion'] )) {
        $descripcion =  $_GET['descripcion'];
    } else {
        $descripcion = '';
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM Usuarios</title>
    <link rel="shortcut icon" href="public/img/flor.png" type="image/png">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <header class="d-flex justify-content-center align-items-center bg-dark text-light">
        <h1><i class="bi bi-person"></i> ABM de Roles </h1>
    </header>
    <main class="container">
        <div class="row mt-4">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <?php
                    if( isset($_GET['id'] )){
                        echo " <h2 class='text-center text-info'>Editar $descripcion </h2>";
                    } else {
                        echo "<h2 class='text-center text-info'>Alta de Rol</h2>";
                    }
                ?>
                

                <div class="card p-3">
                    <form action="roles/<?php  if($id == 0){ echo 'rolCrear.php';} else {echo 'rolActualizar.php';} ?> " method="post" class="m-4">
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="descripcion">Descripción</label>
                                <input class="form-control" name="descripcion" id="descripcion" type="text" value='<?php echo $descripcion; ?>'>
                                <input class="form-control" name="id" id="id" type="text" style="display: none;" value='<?php echo $id; ?>'>
                            </div>
                           
                        </div>
                        
                        <div class="row mt-3 d-flex justify-content-evenly">
                            <button class="btn btn-outline-success col-md-4 " type="submit">Guardar </button>
                            <a href="views/index.html" class="btn btn-outline-dark col-md-4">Cancelar</a>
                        </div>
                       
                    </form>

                </div>
            </div>
        </div>

    </main>
    <footer class="d-flex justify-content-center align-items-center bg-dark text-light">
        <p> ABM | <img src="../public/img/logo.png" height="40" width="80"></p>
    </footer>
</body>
</html>