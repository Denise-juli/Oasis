<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-10">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha3104-1BmE4kWBq710iYhFldvKuhfTAU10auU10tT94WrHftjDbrCEXSU1oBoqyl2QvZ10jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/estilos.css">

    <title>detalle</title>
    <link rel="shortcut icon" href="../public/img/flor.png" type="image/png">
</head>

<body>
  
<header class="" style=" color: #545454;">
        <div class="container">
          <nav class="navbar navbar-expand-lg aline-item-center text-uppercase pt-4">
            <div class="container-fluid">
              <a class="navbar-brand" href="../index">
                <img src="../public/img/logo.png" href="#" alt="" width="140" height="70" class="logo d-inline-block align-text-top"></a>
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
                      <a class="nav-link" href="../nosotros">Nosotros</a>  
                      </li>
                      
                      <li class="nav-item pr-3">
                          <a class="nav-link" href="../contacto">Contacto</a>  
                          </li>
                          <li class="nav-item pr-3">
                              <a  class="nav-link" href="../sedes">Sedes</a>  
                              </li>
                              <li class="nav-item pr-3">
                                  <a class="nav-link" href="../servicio">Servicios</a>  
                                  </li>
                                  <li class="nav-item pr-3">
                                      <a class="nav-link" href="../logIn">logIn</a>  
                                      </li>
                                      <li><a class="nav-link" href="../usuario/logout">LogOut</a></li>
                                      
     
      </ul>
        </div>
              </div>
          </nav>
        </div>
      </header>

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
           <img src='../$foto' class='img-fluid rounded-start' alt='...' >
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




    </div>  


";
              }
                
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

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Dejanos tu comentario (Me gusta, No me gusta)</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel-body">

                    <!--Inicio elementos contenedor-->

                    <div class="comment-form-container">
                        <form id="frm-comment">
                            <div class="input-row">
                                <input type="hidden" name="comentario_id" id="commentId" placeholder="Name" /> <input class="input-field" type="text" name="name" id="name" placeholder="Nombres" />
                            </div>
                            <div class="input-row">
                                <textarea class="input-field" type="text" name="comment" id="comment" placeholder="Agregar comentario">  </textarea>
                            </div>
                            <div>
                                <input type="button" class="btn-submit" id="submitButton" value="Publicar Ahora" />
                                <div id="comment-message">Comentario ha sido agregado exitosamente!</div>
                            </div>
                            <div style="clear:both"></div>
                        </form>
                    </div>
                    <div id="output"></div>
                    <script>
                        var totalLikes = 0;
                        var totalUnlikes = 0;

                        function postReply(commentId) {
                            $('#commentId').val(commentId);
                            $("#name").focus();
                        }

                        $("#submitButton").click(function() {
                            $("#comment-message").css('display', 'none');
                            var str = $("#frm-comment").serialize();

                            $.ajax({
                                url: "AgregarComentario.php",
                                data: str,
                                type: 'post',
                                success: function(response) {
                                    var result = eval('(' + response + ')');
                                    if (response) {
                                        $("#comment-message").css('display', 'inline-block');
                                        $("#name").val("");
                                        $("#comment").val("");
                                        $("#commentId").val("");
                                        listComment();
                                    } else {
                                        alert("Failed to add comments !");
                                        return false;
                                    }
                                }
                            });
                        });

                        $(document).ready(function() {
                            listComment();
                        });

                        function listComment() {
                            $.post("ListaDeComentarios.php",
                                function(data) {
                                    var data = JSON.parse(data);

                                    var comments = "";
                                    var replies = "";
                                    var item = "";
                                    var parent = -1;
                                    var results = new Array();

                                    var list = $("<ul class='outer-comment'>");
                                    var item = $("<li>").html(comments);

                                    for (var i = 0;
                                        (i < data.length); i++) {
                                        var commentId = data[i]['comentario_id'];
                                        parent = data[i]['parent_comentario_id'];

                                        var obj = getLikesUnlikes(commentId);

                                        if (parent == "0") {
                                            if (data[i]['like_unlike'] >= 1) {
                                                like_icon = "<img src='img/MeGusta.png'  id='unlike_" + data[i]['comentario_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comentario_id'] + ",-1)' />";
                                                like_icon += "<img style='display:none;' src='img/NoMeGusta.png' id='like_" + data[i]['comentario_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comentario_id'] + ",1)' />";
                                            } else {
                                                like_icon = "<img style='display:none;' src='img/MeGusta.png'  id='unlike_" + data[i]['comentario_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comentario_id'] + ",-1)' />";
                                                like_icon += "<img src='img/NoMeGusta.png' id='like_" + data[i]['comentario_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comentario_id'] + ",1)' />";

                                            }

                                            comments = "\
                                        <div class='comment-row'>\
                                            <div class='comment-info'>\
                                                <span class='commet-row-label'>De</span>\
                                                <span class='posted-by'>" + data[i]['comment_sender_name'] + "</span>\
                                                <span class='commet-row-label'>a las </span> \
                                                <span class='posted-at'>" + data[i]['date'] + "</span>\
                                            </div>\
                                            <div class='comment-text'>" + data[i]['comment'] + "</div>\
                                            <div>\
                                                <a class='btn-reply' onClick='postReply(" + commentId + ")'>Responder</a>\
                                            </div>\
                                            <div class='post-action'>\ " + like_icon + "&nbsp;\
                                                <span id='likes_" + commentId + "'> " + totalLikes + " Me Gusta </span>\
                                            </div>\
                                        </div>";

                                            var item = $("<li>").html(comments);
                                            list.append(item);
                                            var reply_list = $('<ul>');
                                            item.append(reply_list);
                                            listReplies(commentId, data, reply_list);
                                        }
                                    }
                                    $("#output").html(list);
                                });
                        }

                        function listReplies(commentId, data, list) {

                            for (var i = 0;
                                (i < data.length); i++) {

                                var obj = getLikesUnlikes(data[i].comentario_id);
                                if (commentId == data[i].parent_comentario_id) {
                                    if (data[i]['like_unlike'] >= 1) {
                                        like_icon = "<img src='img/MeGusta.png'  id='unlike_" + data[i]['comentario_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comentario_id'] + ",-1)' />";
                                        like_icon += "<img style='display:none;' src='img/NoMeGusta.png' id='like_" + data[i]['comentario_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comentario_id'] + ",1)' />";

                                    } else {
                                        like_icon = "<img style='display:none;' src='img/NoMeGusta.png'  id='unlike_" + data[i]['comentario_id'] + "' class='like-unlike'  onClick='likeOrDislike(" + data[i]['comentario_id'] + ",-1)' />";
                                        like_icon += "<img src='img/NoMeGusta.png' id='like_" + data[i]['comentario_id'] + "' class='like-unlike' onClick='likeOrDislike(" + data[i]['comentario_id'] + ",1)' />";

                                    }
                                    var comments = "\
                                        <div class='comment-row'>\
                                            <div class='comment-info'>\
                                                <span class='commet-row-label'>De </span>\
                                                <span class='posted-by'>" + data[i]['comment_sender_name'] + "</span>\
                                                <span class='commet-row-label'>a las </span> \
                                                <span class='posted-at'>" + data[i]['date'] + "</span>\
                                            </div>\
                                            <div class='comment-text'>" + data[i]['comment'] + "</div>\
                                            <div>\
                                                <a class='btn-reply' onClick='postReply(" + data[i]['comentario_id'] + ")'>Responder</a>\
                                            </div>\
                                            <div class='post-action'> " + like_icon + "&nbsp;\
                                                <span id='likes_" + data[i]['comentario_id'] + "'> " + totalLikes + " Me Gusta </span>\
                                            </div>\
                                        </div>";

                                    var item = $("<li>").html(comments);
                                    var reply_list = $('<ul>');
                                    list.append(item);
                                    item.append(reply_list);
                                    listReplies(data[i].comentario_id, data, reply_list);
                                }
                            }
                        }

                        function getLikesUnlikes(commentId) {

                            $.ajax({
                                type: 'POST',
                                async: false,
                                url: 'Envio_MeGusta.php',
                                data: {
                                    comentario_id: commentId
                                },
                                success: function(data) {
                                    totalLikes = data;
                                }

                            });

                        }


                        function likeOrDislike(comentario_id, like_unlike) {

                            $.ajax({
                                url: 'MeGusta_NoMeGusta.php',
                                async: false,
                                type: 'post',
                                data: {
                                    comentario_id: comentario_id,
                                    like_unlike: like_unlike
                                },
                                dataType: 'json',
                                success: function(data) {

                                    $("#likes_" + comentario_id).text(data + " likes");

                                    if (like_unlike == 1) {
                                        $("#like_" + comentario_id).css("display", "none");
                                        $("#unlike_" + comentario_id).show();
                                    }

                                    if (like_unlike == -1) {
                                        $("#unlike_" + comentario_id).css("display", "none");
                                        $("#like_" + comentario_id).show();
                                    }

                                },
                                error: function(data) {
                                    alert("error : " + JSON.stringify(data));
                                }
                            });
                        }
                    </script>

                    <!--Fin elementos contenedor-->
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <div class="container">
            <p>Para más desarrollos <a href="https://www.configuroweb.com/46-aplicaciones-gratuitas-en-php-python-y-javascript/#Aplicaciones-gratuitas-en-PHP,-Python-y-Javascript" target="_blank">ConfiguroWeb</a></p>
        </div>
    </div>
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