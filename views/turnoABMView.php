<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/css/estilos.css">
    <title>PANEL ABM</title>
</head>

<body>

    <main id="panel">
                            <!-- EDICION DE CATEGORIAS -->
        <h4>AQUI PODRAS MODIFICAR INFORMACION DESDE LA BASE DE DATOS.</h4>

        <div class="panel"> 
            <div id="cat1" class="cat1">
                <h5>EDICION DE TURNOS</h5>
                <table class="tabla-cat">
                    <tr>
                        <th>TURNOS</th> <th>TIPO</th> <th>OPCIONES</th>
                    </tr>
                    
                    <?php
                    
                    $id = $_GET['id'];
             $model =new  ProductoModel();
             $productoArr = $model->ver($id);

                        for ($i=0; $i < count($lista) ; $i++) { 
                            $id =  $lista[$i]['turno_id'];
                            $nombre = $lista[$i]['fecha_res'];
                            $estado = $lista[$i]['estado'];

                            echo "
                                    <tr>
                                    <td>$nombre</td>
                                    <td>$id</td>
                                    <td><a href ='turno/actualizar'>MODIFICAR</a> | <a href =''>BORRAR </a></td>
                                </tr>
                            ";

                        }

                    ?>
                    <tr>
                        <td>Turno 1</td>
                        <td>Tipo 1</td>
                        <td><a href ="modiftur.html">MODIFICAR</a> | <a href ="">BORRAR </a></td>
                    </tr>

                   

                </table>
            </div>   
                                        <!-- AGREGAR DE CATEGORIAS -->
            <div class="tur2">
                <h5>AGREGAR NUEVO TURNO</h5> 
                <form action="altatur.php" class="form-control" method="post" name ="cate">
                <input id="nombreTurno" placeholder="Fecha de turno:" class="form-control"
                        type="text" name="nombreTurno" required/>

                <input type="submit" id="boton3" value="Agregar" onclick="valida_envia()">

                </form>
            </div>

            <script type="text/javascript">

                    function valida_envia(){
                        if(document.turn.nombreTurno.value.length==0){
                            alert("Por favor, escriba la fecha del turno.")
                            document.turn.nombreTurno.focus()
                            return 0;
                        }
                    }
            </script>

                                   <!-- EDICION DE INSTRUMENTOS-->
            <div id="tabla-inst">
                <h5>EDICION DE SERVICIOS</h5>
                <table class="tabla-inst">
                    <tr>
                        <th>SERVICIOS</th> <th>OPCIONES</th>
                    </tr>
    
                    <tr>
                        <td>Servicio 1</td>
                        <td><a href="modifserv.html">MODIFICAR</a> | <a href="">BORRAR</a></td>
                    </tr>
                    <tr>
                        <td>Servicio 2</td>
                        <td><a href="modifserv.html">MODIFICAR</a> | <a href="">BORRAR</a></td>
                    </tr>
                    <tr>
                        <td>Servicio 3</td>
                        <td><a href="modifserv.html">MODIFICAR</a> | <a href="">BORRAR</a></td>
                    </tr>
                    <tr>
                        <td>Servicio 4</td>
                        <td><a href="modifserv.html">MODIFICAR</a> | <a href="">BORRAR</a></td>
                    </tr>
                    <tr>
                        <td>Servicio 5</td>
                        <td><a href="modifserv.html">MODIFICAR</a> | <a href="">BORRAR</a></td>
                    </tr>
                    <tr>
                        <td>Servicio 6</td>
                        <td><a href="modifserv.html">MODIFICAR</a> | <a href="">BORRAR</a></td>
                    </tr>
                                    
                </table>
            </div>
                                
            <div class="inst2">
                <h5>AGREGA UN NUEVO SERVICIO</h5>
                <form action="altaserv.php" method="post" name ="servicio" enctype="multipart/form-data">
                    <input placeholder="Nombre:" class="form-control" id="nombre" type="text" name="nombre" required/>
                    <textarea placeholder="Descripción:" class="form-control" id="descripcion" name="descripcion"></textarea>
                    <input placeholder="Precio:" class="form-control" id="precio" type="text" name="precio" required/>
                    <label for = "foto">Seleccione una imagen del servicio: </label>
                    <input class="form-control" accept="image/jpeg" id="foto" type="file" name="foto">


                    <input type="submit" id="boton3" value="Agregar" onclick="valida_envia2()"/>
                </form>
                
                <script>

                    function valida_envia2(){
                        if(document.servicio.nombre.value.length==0){
                            alert("Por favor, escriba el nombre del servicio.")
                            document.servicio.nombre.focus()
                            return 0;
                        }

                        if(document.servicio.precio.value.length==0){
                            alert("Por favor, escriba el precio del servicio.")
                            document.servicio.precio.focus()
                            return 0;
                        }

                        if(document.servicio.descripcion.value.length==0){
                            alert("Por favor, escriba la descripcion del servicio.")
                            document.servicio.descripcion.focus()
                            return 0;
                        }

                        }

                     
                    }
                </script>
                
            </div>
        </div>

        <div class="back">
            <ul>
                <a href=""> VOLVER</a>
            </ul>
        </div>   

    </main>
