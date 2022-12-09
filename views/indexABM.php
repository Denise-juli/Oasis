<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <link rel="shortcut icon" href="public/img/flor.png" type="image/png">

  <!-- Bootstrap CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" src="public/css/estilos.css">

</head>



<body>
<header class='d-flex justify-content-center align-items-center bg-dark text-light'>
        <h1> <i class='bi bi-person'></i> ABM   </h1>
        <img src='public/img/logo.png' height='100' width='200'>
    </header>
    </br>
    <h2 class='d-flex justify-content-center align-items-center'>Personas</h2>
    </br>
<?php

$listaUsuarios = $abm->listar();
foreach ($listaUsuarios as $abm) {
   $usuario_id = $abm['usuario_id'];
   $nombre = $abm['nombre'];
   $apellido = $abm['apellido'];
   $email = $abm['email'];
   $fecha_nac = $abm['fecha_nac'];
   $telefono = $abm['telefono'];
   $fk_tipo_id = $abm['fk_tipo_id'];
   $puntos = $abm['puntos'];


   echo "

    <main class='container'>
        <div class='row mt-4'>
            <div class='col-md-1'></div>
            <div class='col-md-8'>
                <table class='table table-hover'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Fecha_nac</th>
                            <th>Telefono</th>
                            <th>Puntos</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>$usuario_id</td>
                            <td>$nombre</td>
                            <td>$apellido</td>
                            <td>$email</td>
                            <td>$fecha_nac</td>
                            <td>$telefono</td>
                            <td>$puntos</td>
                            <td>$fk_tipo_id</td>
                            <td>
                                <a href='usuario/actualizar?id=$usuario_id' class='btn btn-outline-dark'><img src='public/img/cambio.png'  height='20' width='20' ><i class='bi bi-pencil-square'></i></a>
                                <a href='usuario/eliminar?id=$usuario_id' class='btn btn-outline-danger'><img src='public/img/cruz.png'  height='20' width='20' ><i class='bi bi-trash'></i></a>
                            </td>
                        </tr>";
}


            ?>







  
     
 





<?php

echo "    </br>
<h2 class='d-flex justify-content-center align-items-center'>Servicios</h2>
<style>
    h2 {
      color: #966857;
      font-family: 'Playfair Display';
    }
  </style> ";


$listaServicios = $servicio->listar();
 foreach ($listaServicios as $servicio) {
    $servicio_id = $servicio['servicio_id'];
    $nombre = $servicio['nombre'];
    $descripcion = $servicio['descripcion'];
    $precio = $servicio['precio'];
    $foto = $servicio['foto'];
 
   
    echo 
    
    " </br>
    <div class='row mt-4'>
        <div class='col-md-1'></div>
        <div class='col-md-8'>
            <table class='table table-hover'>
                <thead>

                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>$servicio_id</td>
                        <td>$nombre</td>
                        <td>$descripcion</td>
                        <td>$precio</td>
                        <td>
                            <form action='inicio.php' method='POST' enctype='multipart/form-data'/>
                            <input name='$foto' id='$foto' type='file'/>
                            <input type='submit' name='subir' value='Subir imagen' class='btn btn-danger'/>
                        </form>
                        </td>
                        <td>
                            <a href='servicio/actualizar?id=$servicio_id' class='btn btn-outline-dark'><img src='public/img/cambio.png'  height='20' width='20' ><i class='bi bi-pencil-square'></i></a>
                            <a href='servicio/eliminar?id=$servicio_id' class='btn btn-outline-danger'><img src='public/img/cruz.png'  height='20' width='20' ><i class='bi bi-trash'></i></a>
                        </td>
                    </tr>"
    
    
    
    ;}
    ?>

    
                        



                      
                    </tbody>
                </table>
            </div>
        </div>
</div>



        
</br>
<section>
    <h3>Agregar usuario</h3>
    <style>
      h3 {
        color: #966857;
        font-family: "Playfair Display";
      }
    </style>
    <br />
    <form action="agregarUsuario.php" method="POST" >
    <div class="input-group"  >
      <input type="text"  class="form-control" placeholder="Nombre" name="nombre" id="nombre">
      <input type="text"  class="form-control" placeholder="Apellido" name="apellido" id="apellido">
      <input type="text"  class="form-control" placeholder="Email" name="email" id="email">
      
      <select name="acceso" id="acceso" class="form-control" name="acceso">
        <option value="1">Admin</option>
        <option value="2">Usuario</option>
      </select>
      <a href="agregarUsuario.php?id=2"><button class="btn-lg" type="button"><img src="public/img/enter.png" height="20" width="20"></button></a>
      <style>
        button {
          background-color: #966857;
          border-color: #966857;
          color: white;
        }
      </style>
    </div>
  </section>
</br>




        
</br>
<section>
    <h3>Agregar servicio</h3>
    <style>
      h3 {
        color: #966857;
        font-family: "Playfair Display";
      }
    </style>
    <br />
    <form action="agregarServicio.php" method="POST" >
    <div class="input-group"  >
      <input type="text"  class="form-control" placeholder="id" name="id" id="id">
      <input type="text"  class="form-control" placeholder="Nombre" name="nombre" id="nombre">
      <input type="text"  class="form-control" placeholder="Descripcion" name="descripcion" id="descripcion">
      <input type="text"  class="form-control" placeholder="Precio" name="precio" id="precio">
      
      <form action="inicio.php" method="POST" enctype="multipart/form-data"/>
      <input name="archivo" id="archivo" type="file"/>
      <input type="submit" name="subir" value="Subir imagen" class="btn btn-danger"/>
      </form>
      
      <a href="agregarServicio.php?id=2"><button class="btn-lg" type="button"><img src="public/img/enter.png" height="20" width="20"></button></a>
      <style>
        button {
          background-color: #966857;
          border-color: #966857;
          color: white;
        }
      </style>
    </div>
  </section>
</br>












</div>

</body>
</html>









    </main>
  


    <footer class="d-flex justify-content-center align-items-center bg-dark text-light">
        <p> ABM | <img src="public/img/logo.png" height="40" width="80"></p>
    </footer>



</body>



</html>
    