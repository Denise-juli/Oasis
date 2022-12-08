<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>editarUsuario</title>
  <link rel="shortcut icon" href="../public/img/flor.png" type="image/png">

  <!-- Bootstrap CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" src="public/css/estilos.css">

</head>


<body>
    <header class="d-flex justify-content-center align-items-center bg-dark text-light">
    <img src='../public/img/logo.png' height='100' width='200'>
        <h1><i class="bi bi-person"></i>ABM de Usuarios </h1>
    </header>


    <main class="container">
        <div class="row mt-4">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h2 class="text-center">Alta de usuario</h2>
            </br>

<?php
            $listaUsuarios = $modelAct->listar();

            foreach ($listaUsuarios as $abm) {
               $usuario_id = $abm['usuario_id'];
                $nombre = $abm['nombre'];
                $apellido = $abm['apellido'];
                $email = $abm['email'];
                $fecha_nac = $abm['fecha_nac'];
                $telefono = $abm['telefono'];
                $fk_tipo_id = $abm['fk_tipo_id'];
                $puntos = $abm['puntos'];

            }


echo "

                <div class='card p-3'>
                    <form action='../usuario/modificar' class='m-4'>
                        <div class='row mt-2'>
                            <div class='col-md-6'>
                                <label for='nombre'>Nombre:</label>
                                <input  class='form-control' name='nombre' id='nombre' type='text'>
                            </div>
                            <div class='col-md-6'>
                                <label for='apellido'>Apellido</label>
                                <input  class='form-control' name='apellido' id='apellido' type='text'>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class='col-md-6'>
                                <label for='email'>Email</label>
                                <input  class='form-control' name='old_email' id='email' type='text'>
                            </div>
                            <div class='col-md-6'>
                                <label for='rol'>Rol</label>
                                <select name='fk_tipo_id' id='rol' class='form-control'>
                                    <option value='1'>Administrador</option>
                                    <option value='2'>Usuario</option>

                                </select>
                            </div>
                        </div>

                        <div class='row mt-3'>
                            <div class='col-md-6'>
                                <label for='telefono'>Telefono</label>
                                <input  class='form-control' name='telefono' id='telefono' type='text'>
                            </div>
                            <div class='col-md-6'>
                                <label for='fecha_nac'>Fecha Nacimiento</label>
                                <input  class='form-control' name='fecha_nac' id='fecha_nac' type='date'>
                            </div>
                            <!--div class='col-md-6'>
                                <label for='password2'>Repetir Contraseña</label>
                                <input class='form-control' name='password2' id='password2' type='text'>
                            </div-->
                               <div class='col-md-6'>
                                <label for='password2'>Puntos</label>
                                <input  class='form-control' name='puntos' id='puntos' type='text'>
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