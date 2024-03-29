<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="public/css/estilos.css">

  <link rel="shortcut icon" href="public/img/flor.png" type="image/png">
</head>

<body>
  <header class="" style=" color: #545454;">

    <?php
    session_start();


    if (!isset($_SESSION['fk'])) {
      echo "
      <div class='container'>
      <nav class='navbar navbar-expand-lg aline-item-center text-uppercase pt-4'>
        <div class='container-fluid'>
          <a class='navbar-brand' href='index'>
            <img src='public/img/logo.png' href='#' alt='' width='140' height='70'
              class='logo d-inline-block align-text-top'></a>
          <button class='navbar-toggler' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasRight'
            aria-controls='offcanvasRight'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='offcanvas offcanvas-end navi' tabindex='-1' id='offcanvasRight'
            aria-labelledby='offcanvasRightLabel'>
            <div class='offcanvas-header'>
              <button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas'
                aria-label='Close'></button>
            </div>
            <div class='offcanvas-body'>
              <ul class='navbar-nav ms-auto ms-3'>

                <li class='nav-item pr-3'>
                  <a class='nav-link' href='nosotros'>Nosotros</a>
                </li>

                <li class='nav-item pr-3'>
                  <a class='nav-link' href='contacto'>Contacto</a>
                </li>
                <li class='nav-item pr-3'>
                  <a class='nav-link' href='sedes'>Sedes</a>
                </li>
                <li class='nav-item pr-3'>
                  <a class='nav-link' href='servicio'>Servicios</a>
                </li>
                <li class='nav-item pr-3'>
                  <a class='nav-link' href='logIn'>logIn</a>
                </li>
              </ul>
            </div>
          </div>
      </nav>
    </div>
      ";
    } else if($_SESSION['fk'] == 1){
      echo "<div class='container'>
      <nav class='navbar navbar-expand-lg aline-item-center text-uppercase pt-4'>
        <div class='container-fluid'>
          <a class='navbar-brand' href='index'>
            <img src='public/img/logo.png' href='#' alt='' width='140' height='70'
              class='logo d-inline-block align-text-top'></a>
          <button class='navbar-toggler' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasRight'
            aria-controls='offcanvasRight'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='offcanvas offcanvas-end navi' tabindex='-1' id='offcanvasRight'
            aria-labelledby='offcanvasRightLabel'>
            <div class='offcanvas-header'>
              <button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas'
                aria-label='Close'></button>
            </div>
            <div class='offcanvas-body'>
              <ul class='navbar-nav ms-auto ms-3'>

                <li class='nav-item pr-3'>
                  <a class='nav-link' href='nosotros'>Nosotros</a>
                </li>

                <li class='nav-item pr-3'>
                  <a class='nav-link' href='contacto'>Contacto</a>
                </li>
                <li class='nav-item pr-3'>
                  <a class='nav-link' href='sedes'>Sedes</a>
                </li>
                <li class='nav-item pr-3'>
                  <a class='nav-link' href='servicio'>Servicios</a>
                </li> 
                <li class='nav-item pr-3'>
                <a class='nav-link' href='IndexABM'>ABM Admin</a>
              </li> 
                <li><a class='nav-link' href='usuario/logout'>LogOut</a></li>
              </ul>
            </div>
          </div>
      </nav>
    </div>";
    } else {
      echo "<div class='container'>
      <nav class='navbar navbar-expand-lg aline-item-center text-uppercase pt-4'>
        <div class='container-fluid'>
          <a class='navbar-brand' href='index'>
            <img src='public/img/logo.png' href='#' alt='' width='140' height='70'
              class='logo d-inline-block align-text-top'></a>
          <button class='navbar-toggler' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasRight'
            aria-controls='offcanvasRight'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='offcanvas offcanvas-end navi' tabindex='-1' id='offcanvasRight'
            aria-labelledby='offcanvasRightLabel'>
            <div class='offcanvas-header'>
              <button type='button' class='btn-close text-reset' data-bs-dismiss='offcanvas'
                aria-label='Close'></button>
            </div>
            <div class='offcanvas-body'>
              <ul class='navbar-nav ms-auto ms-3'>

                <li class='nav-item pr-3'>
                  <a class='nav-link' href='nosotros'>Nosotros</a>
                </li>

                <li class='nav-item pr-3'>
                  <a class='nav-link' href='contacto'>Contacto</a>
                </li>
                <li class='nav-item pr-3'>
                  <a class='nav-link' href='sedes'>Sedes</a>
                </li>
                <li class='nav-item pr-3'>
                  <a class='nav-link' href='servicio'>Servicios</a>
                </li>
                <li><a class='nav-link' href='usuario/logout'>LogOut</a></li>
              </ul>
            </div>
          </div>
      </nav>
    </div>";
    }
    ?>





<!--

    <div class="container">
      <nav class="navbar navbar-expand-lg aline-item-center text-uppercase pt-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="index">
            <img src="public/img/logo.png" href="#" alt="" width="140" height="70"
              class="logo d-inline-block align-text-top"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
            aria-controls="offcanvasRight">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end navi" tabindex="-1" id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
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
                  <a class="nav-link" href="sedes">Sedes</a>
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
  -->





  </header>