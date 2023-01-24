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
                                      <li><a class="nav-link" href="usuario/logout">LogOut</a></li>
                                      
     
      </ul>
        </div>
              </div>
          </nav>
        </div>
      </header>


      <div id="servicios">

    </div>



    <div class="container-fluid">

        <div class="padre text-center">
            <div class="row align-items-end">
                

            </div>
        </div>

        <div class="colorserv">
            <div class="">
                <div class="row">
                    <div class="col-9 fondoblanco">
                        <div class="row align-items-center">
                            <div class="col">
                                <img class="imgs" src="public/img/jabon.jpg" alt="jabon aromatico">
                            </div>
                            <div class="col-sm-4">
                                <h2>Día Deluxe </h2>
                                <p>Incluye: <br>
                                    Circuito hídrico + sauna <br>
                                    Masaje Shiatsu <br>
                                    Masaje facial miorrelajante <br>
                                    Fangoterapia <br>
                                    Sala de relax y Aromaterapia <br>
                                    Baño de Oxígeno Activo <br>
                                    Manos y pies <br>
                                </p>
                            </div>
                            <div class="col-sm-4 text-end">
                                <p>Te ofrecemos una cuidada carta
                                    de tratamientos de relax y belleza, pensados para vos</p>
                                <a href="contacto">
                                    <button type="button" class="btn btn-outline-secondary">Contactanos</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php
$listaServicios = $servicio->listar();
 foreach ($listaServicios as $servicio) {
    $servicio_id = $servicio['servicio_id'];
    $nombre = $servicio['nombre'];
    $descripcion = $servicio['descripcion'];
    $precio = $servicio['precio'];
    $foto = $servicio['foto'];
 
    echo "
        <div class='container text-center'>
            <div class='row row-cols-1 row-cols-md-3 g-4'>

                <div class='col'>
                    <a href='servicio/ver?id=$servicio_id'>
                    <div class='card' style='width: 15rem;'>
                        <img src='$foto' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>$nombre</h5>
                            <p class='card-text'>$precio</p>
                        </div>
                    </div>
                    </a>
                </div>
                </div>
                 
";
 } 

?>


   

        <div class="benefi container text-center">
            <div class="row">
                <div class="col-sm-4">
                    <img class="ico" src="public/img/exp.png" alt="cinco estrellas">
                    <p>
                        Contamos con más de 20 años de experiencia en el rubro.
                    </p>
                </div>
                <div class="col-sm-4">
                    <img class="ico" src="public/img/estr.png" alt="cinco estrellas">
                    <p>
                        Veni a disfrutar de una experiencia realmente diferente con nuestro
                        servicio 5
                        estrellas.
                    </p>
                </div>
                <div class="col-sm-4">
                    <img class="ico" src="public/img/conf.png" alt="cinco estrellas">
                    <p>
                        Nuestro SPA es un ámbito ideal para recuperar la armonía entre el cuerpo y el alma.
                    </p>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

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

</html>