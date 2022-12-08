<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>servicios</title>
    <link rel="shortcut icon" href="public/img/flor.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/estilos.css">
    
</head>
<body id="textos">
<header class="" style=" color: #545454;">
        <div class="container">
          <nav class="navbar navbar-expand-lg aline-item-center text-uppercase pt-4">
            <div class="container-fluid">
              <a class="navbar-brand" href="index">
                <img src="public/img/logo.png" href="#" alt="" width="140" height="70" class="logo d-inline-block align-text-top"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end navi" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto ms-3">
      
                      <li class="nav-item pr-3">
                      <a class="nav-link" href="nosotros">Nosotros</a>  
                      </li>
                      
                      <li class="nav-item pr-3">
                          <a class="nav-link" href="contacto">Contacto</a>  
                          </li>
                          <li class="nav-item pr-3">
                              <a  class="nav-link" href="sedes">Sedes</a>  
                              </li>
                              <li class="nav-item pr-3">
                                  <a class="nav-link" href="servicio">Servicios</a>  
                                  </li>
                                  <li class="nav-item pr-3">
                                      <a class="nav-link" href="logIn">logIn</a>  
                                      </li>
      
      </ul>
        </div>
              </div>
          </nav>
        </div>
      </header>


<!--<style>
    body {
      font-family: 'Raleway', sans-serif;
    }
  </style>-->



<?php
 foreach ($listaServicios as $servicio) {
    $servicio_id = $servicio['servicio_id'];
    $nombre = $servicio['nombre'];
    $descripcion = $servicio['descripcion'];
    $precio = $servicio['precio'];
    $foto = $servicio['foto'];
 
    // $arrLength = sizeof($listaProductos);
    echo "
    <div class='container-fluid' style='margin-top: 60px; margin-bottom: 80px;'>
    <main class='container col'>
      <div class='card mb-3' >
      <div class='row '>
         <div class='col'>
           <img src='$foto' class='img-fluid rounded-start' alt='...' >
         </div>
     <div class='col'>
      <div class='card-body' >
        <h5 class='card-title' style='font-family: Playfair Display; margin-top: 15px;'>$nombre</h5>
        <p class='card-text'>$descripcion</p>
        <br/>
        <p class='card-text'><small class='text-muted'>$precio</small></p>
        <a hreft='turnera.html'><button type='submit' id='sub' value='RESERVAR' class='btn-lg' onclick='valida_envia()'>RESERVAR</button></a>
        <!--crea identificador del boton-->
        <style>
          button {
            background-color: #966857;
            border-color: #966857;
            color: white;
            font-family: 'Raleway', sans-serif;
          }
        </style>


</div>
</div>
</div>
</div>
</div>

        ";
      }
      ?>
      </div>

      <div class="container-fluid fondofooter text-center">

<div class="container-fluid fondofooter text-center">


<div class="row align-items-center">

    <div class="col-sm-4">
        <ul>
            <li>
                <a href="index">Home</a>
            </li>
            <li>
                <a href="servicios">Servicios</a>
            </li>
            <li>
                <a href="nosotros">Nosotros</a>
            </li>
            <li>
                <a href="contacto">Contacto</a>
            </li>
            <li>
                <a href="sedes">Sedes</a>
            </li>
            <li>
                <a href="login">Login</a>
            </li>
        </ul>
    </div>

    <div class="col-sm-4 text-center">
        <p>Horarios</p>
        <p>​Lunes a Viernes 12 a 21hs <br>
            Sábados 10 a 21hs <br>
            Domingos y feriados 16 a 21hs <br>
            <br>
            ​Horario Administrativo: De Lunes a Sábado de 10 a 21hs
        </p>
    </div>

    <div class="col-sm-4 text-center">
        <p>Contacto</p>
        <p>011-458962351 / 2 <br>
            011-456897856 / 5 <br>
            consultas@spa.com <br>
            <br>
            Sede Barrio Norte:​Vicente López 2050
        </p>
    </div>

</div>

<div class="linea">

</div>


<div class="row">
    <div class="col align-self-start">
        <img src="public/img/logo.png" alt="logo del spa" width="80" height="auto">
    </div>

    <div class="col  align-self-end">
        <img class="iconos" src="public/img/instagram.png" alt="logo instagram">


        <img class="iconos" src="public/img/facebook.png" alt="logo instagram">


        <img class="iconos" src="public/img/twitter.png" alt="logo instagram">
    </div>
</div>


</div>
</body>
</html>