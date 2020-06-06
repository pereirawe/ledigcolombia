    <nav id="home" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>">
            <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/logo100width.png" height="" alt="LEDIG Colombia" title="LEDIG Colombia">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto nav-tabs">
                <li class="nav-item ">
                    <a id="nav_inicio" class="nav-link" href="<?= $httpHost ?>">Inicio </a>
                </li>
                <li class="nav-item">
                    <a id="nav_quienes_somos" class="nav-link" href="<?= $httpHost ?>quienes-somos.php">Quienes somos</a>
                </li>

                <li class="nav-item dropdown">
                    <a id="nav_productos" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Productos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= $httpHost ?>index.php#productos-premium">Productos Premium</a> 
                        <a class="dropdown-item" href="<?= $httpHost ?>index.php#productos-estandar">Productos Estándar</a> 
                        <a class="dropdown-item" href="<?= $httpHost ?>index.php#sanitizacion">Sanitización</a> 
                    </div>
                </li>

                <!-- <li class="nav-item dropdown">
                    <a id="nav_productos" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Productos Premium
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./productos_iluminacion_1.php">Iluminación Exterior Público</a> 
                        <a class="dropdown-item" href="./productos_iluminacion_2.php">Iluminación Exterior FLOOD</a> 
                        <a class="dropdown-item" href="./productos_iluminacion_3.php">Poste Exterior</a> 
                        <a class="dropdown-item" href="./productos_iluminacion_4.php">Iluminación Exterior Canopy</a> 
                        <a class="dropdown-item" href="./productos_iluminacion_5.php">Iluminación Exterior Non-Linear</a> 
                        <a class="dropdown-item" href="./productos_iluminacion_6.php">Tubo LED 18W T802-18</a> 
                        <a class="dropdown-item" href="./productos_iluminacion_7.php">Lampara Solar de Iluminación Exterior</a> 
                        <a class="dropdown-item" href="./productos_iluminacion_8.php">LED Luminaria Exterior IP</a> 
                        <a class="dropdown-item" href="./productos_iluminacion_9.php">IV High Bay Interior</a> 
                        <a class="dropdown-item" href="./productos_iluminacion_10.php">iK Series Luz de Calle</a> 
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="nav_productos_standar" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Productos Estandar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./productos_standar_1.php">Lámpara LED Alta Bahia Interior</a> 
                        <a class="dropdown-item" href="./productos_standar_2.php">Lámpara Solar Iluminación Exterior STXX-10</a> 
                        <a class="dropdown-item" href="./productos_standar_3.php">Lámpara Solar Iluminación Exterior STXX-39</a> 
                        <a class="dropdown-item" href="./productos_standar_4.php">Lámpara Solar Iluminación Exterior STXX-65</a> 
                        <a class="dropdown-item" href="./productos_standar_5.php">BH -Wall Washer</a> 
                    </div>
                </li> -->
                <li class="nav-item dropdown">
                    <a id="nav_productos" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Asesoría
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./asesoria.php">Asesoría LEDIGCO</a>
                        <a class="dropdown-item" href="./why_led.php">LED Blitz</a>
                        <a class="dropdown-item" href="./retilap.php">Norma RETILAP</a>                      
                    </div>
                </li>
                <li class="nav-item">
                    <a id="nav_contactos" class="nav-link" href="./contactos.php">Contacto <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a
                        id=""
                        class="nav-link"
                        href="https://www.facebook.com/ledigcolombia"
                        target="_blank"
                    >
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        id=""
                        class="nav-link"
                        href="https://www.youtube.com/channel/UCCKOO0f8I6KjBWIJSA1LJYA"
                        target="_blank"
                    >
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>