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
                <li class="nav-item dropdown">
                    <a id="nav_productos" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Asesoría
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= $httpHost ?>asesoria.php">Asesoría LEDIGCO</a>
                        <a class="dropdown-item" href="<?= $httpHost ?>why_led.php">LED Blitz</a>
                        <a class="dropdown-item" href="<?= $httpHost ?>retilap.php">Norma RETILAP</a>                      
                    </div>
                </li>
                <li class="nav-item">
                    <a id="nav_contactos" class="nav-link" href="<?= $httpHost ?>contactos.php">Contacto <span class="sr-only">(current)</span></a>
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