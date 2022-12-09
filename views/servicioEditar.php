<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>editarServicio</title>
  <link rel="shortcut icon" href="public/img/flor.png" type="image/png">

  <!-- Bootstrap CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" src="public/css/estilos.css">

</head>


<body>
    <header class="d-flex justify-content-center align-items-center bg-dark text-light">
        <img src="../public/img/logo.png" height="100" width="200">
        <h1><i class="bi bi-person"></i> ABM de Servicios </h1>
    </header>


    <main class="container">
        <div class="row mt-4">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h2 class="text-center">Alta de servicio</h2>
            </br>

            <?php
            $listaServicio = $modelAct->listar();

            foreach ($listaServicio as $abm) {
               $servicio_id = $abm['servicio_id'];
               $nombre = $abm['nombre'];
               $descripcion = $abm['descripcion'];
               $precio = $abm['precio'];
               $foto = $abm['foto'];
              

            }
          
echo "
                <div class='card p-3'>
                    <form action='servicio/modificar' class='m-4'>                   
                        <div class='row mt-2'>
                            <div class='col-md-6'>
                                <label for='nombre'>Nombre</label>
                                <input class='form-control' name='nombre' values='$nombre' type='text'>
                            </div>
                            <div class='col-md-6'>
                                <label for='apellido'>Descripcion</label>
                                <input class='form-control' name='descripcion' values='$descripcion' type='text'>
                            </div>
                        </div>
                        <div class='row mt-2'>
                            <div class='col-md-6'>
                                <label for='email'>Precio</label>
                                <input class='form-control' name='precio' values='$precio' type='text'>
                            </div>
                            <div class='col-md-6'>
                                <label for='rol'>Foto</label>
                                 </br>
                                <form action='servicio/modificar' method='POST' enctype='multipart/form-data'/>
                                <input name='archivo' id='archivo' type='file'/>
                                <input type='submit' name='subir' value='Subir imagen' class='btn btn-danger'/>
                            </form>
                            </div>
                        </div>

                        
                    </form>

                    <div class='row d-flex justify-content-evenly'>
                        <button href='indexABM' class='btn btn-outline-dark    col-md-4'>Cancelar</button>
                        <input type='submit' class='btn btn-outline-danger col-md-4' value='Guardar' onclick='actualizar()'>
                    </div>

                </div>
            </div>
        </div>




    </main>
    ";
    ?>

</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
    <footer class="d-flex justify-content-center align-items-center bg-dark text-light">
        <p> ABM | <img src="public/img/logo.png" height="40" width="80"></p>
    </footer>
   
</body>
</html>