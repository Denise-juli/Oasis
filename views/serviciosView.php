<main id="servicios">
        <div class="salir">
            <a href="">CERRAR SESION
            <img src="public/img/enter.png" alt="salir"></a>
        </div>
<!-- Fila 1 -->        
        <div class="servicios">
            <h1>SERVICIOS</h1>

            <div>
                <a href="servicios.html">
                <img src="public/img/c1.jpg" alt="c" class="img-fluid" name="1"></a>
            </div>
            <div>
                <a href="servicios.html">
                <img src="public/img/c2.jpg" alt="c" class="img-fluid" name="2"></a>
            </div>
            <div>
                <a href="servicios.html">
                <img src="public/img/c3.jpg" alt="c" class="img-fluid" name="3"></a>
            </div>
            <div>
                <a href="servicios.html">
                <img src="public/img/c4.jpg" alt="c" class="img-fluid" name="4"></a>                
            </div>

            <div>
                <a href="servicios.html">
                <img src="public/img/c5.jpg" alt="c" class="img-fluid" name="5"></a>
            </div>
            <div>
                <a href="servicios.html">
                <img src="public/img/c6.jpg" alt="c" class="img-fluid" name="6" ></a>
            </div>
            <div>
                <a href="servicios.html">
                <img src="public/img/c7.jpg" alt="c" class="img-fluid" name="7"></a>
            </div>
            <div>
                <a href="servicios.html">
                <img src="public/img/c8.jpg" alt="c" class="img-fluid" name="8"></a>                
            </div>
            <div>
                <a href="servicios.html">
                <img src="public/img/c9.jpg" alt="c" class="img-fluid" name="9"></a>
            </div>
            <div>
                <a href="servicios.html">
                <img src="public/img/c10.jpg" alt="c" class="img-fluid" name="10"></a>
            </div>
            <div>
                <a href="servicios.html">
                <img src="public/img/c11.jpg" alt="c" class="img-fluid" name="11"></a>
            </div>
            <div>
                <a href="servicios.html">
                <img src="public/img/c12.jpg" alt="c" class="img-fluid" name="12"></a>                
            </div>
                <!-- Fila 2 -->
            <div id="turn" class="turnos">

                <ul><h3>TURNOS</h3>
        
                    <?php
                        $lista = 0;
                        for ($i=0; $i < count($lista); $i++) { 
                            $turno_id = $lista[$i]['turno_id'];
                            $fecha_ser = $lista[$i]['fecha_ser'];

                            echo "<li>
                                    <a href='turno/listar/$turno_id'>$fecha_ser</a>
                                   </li>";
                        }

                    ?>

                </ul>
            </div>
<!-- Fila 3 -->
            <div class="servs">

                <?php



                    foreach ($listaServicios as $item) {
                       
                        $servicio_id = $item['servicio_id'];
                        $nombre = $item['nombre'];
                        $descripcion = $item['descripcion'];
                        $foto = $item['foto'];
                        $precio = $item['precio'];


 
                        echo "
                            <div class='items'>
                                <nav>
                                    <ul>
                                        <li>
                                            <a href=''>$nombre
                                            <p class=''>Descripcion: $$descripcion</p><br>
                                            <p class=''>Precio: $$precio</p><br>
                                            <img src='public/img/$foto' alt='$nombre'></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        ";
                    }

                ?>


               


            </div>
        </div>

    </main>