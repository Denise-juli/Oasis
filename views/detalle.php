<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-10">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha3104-1BmE4kWBq710iYhFldvKuhfTAU10auU10tT94WrHftjDbrCEXSU1oBoqyl2QvZ10jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/css/estilos.css">

  <title>detalle</title>
  <link rel="shortcut icon" href="../public/img/flor.png" type="image/png">
</head>

<body>



  <?php
  foreach ($listaServicios as $servicio) {
    $servicio_id = $servicio['servicio_id'];
    $nombre = $servicio['nombre'];
    $descripcion = $servicio['descripcion'];
    $precio = $servicio['precio'];
    $foto = $servicio['foto'];

    echo "



<div class='container-fluid' style='margin-top: 60px; margin-bottom: 80px;'>

    <div class='container col'>

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

                  <div class='btn_login'>
                    <div class='d-grid gap-2'>
                        <input type='submit' id='sub' value='RESERVAR' class='btn-lg'>
                    </div>
      
                  </div>
            </div>
          </div>
      </div>
      </div>
      </div> 




    </div>  ";

    //session_start();
    if (isset($_SESSION['fk'])){

echo "
<div class='card w-25 m-auto'>
  <div class='card-header'>
    Deja tu comentario aqui: 
  </div>
  <div class='card-body'>
    <blockquote class='blockquote mb-0'>
        <form action='./addComentario?fkid=$servicio_id' method='POST'>
            <div class='col-lg-8'>
            <label for='' class='form-label'>
            <textarea name='comentario' class='form-control' id='exampleFormControlTextarea1' rows='3'></textarea>                
            </label>
            <input name='calif' type='number' rows='3' id='exampleFormControlTwextareal' placeholder='Calificacion' class='form-control'>
            
            </div>
            <div class='col-lg-8'>
            <button type='submit' class='btn btn-md btn-secondary mt-2'>Publicar</button>
            </div>
        </form>
    </blockquote>

  </div>
</div> ";
  }
}

  ?>






  <?php
  //======================COMENTARIOS AYER 28/02==========================
 
    

  foreach ($comentarios as $comentario) {

    $contenido = $comentario['contenido'];
    $calificacion = $comentario['calificacion'];
    echo "<div class='card w-50 m-auto mt-5 mb-5'>
            <div class='card-header'>
              <img src='public/img/comillas.png' alt='imagen de comillas' style='max-width: 40px';>
            </div>
            <div class='card-body'>
              <blockquote class='blockquote mb-0'>
                <p>" . $contenido .
              "
                </p>
                <footer class='blockquote-footer'>Calificación: " . $calificacion . "</footer>
              </blockquote>
            </div>
          </div>";
  }

  //======================================================================
  ?>

  <style>
    input {
      background-color: #966857;
      border-color: #966857;
      color: white;
      font-family: 'Raleway', sans-serif;
    }
  </style>

  <style>
    body {
      font-family: 'Raleway', sans-serif;
    }
  </style>



  <div class="panel-footer">
    <div class="container">
    </div>
  </div>
</body>

<div class="container-fluid fondofooter text-center mt-5">


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
      <img src="../public/img/logo.png" alt="logo del spa" width="80" height="auto">
    </div>

    <div class="col  align-self-end">
      <img class="iconos" src="../public/img/instagram.png" alt="logo instagram">


      <img class="iconos" src="../public/img/facebook.png" alt="logo instagram">


      <img class="iconos" src="../public/img/twitter.png" alt="logo instagram">
    </div>
  </div>


</div>

</html>