<?php
    include ('./layout/header.php');
    include ('./layout/jumbotrom.php');
    include ('./layout/nav.php');
?>
    
    <div class="container-fluid blue-dot">
        <div class="container-fluid">
            <div class="row pt-5 pb-5">
                <div class="col-md-4" style="text-align:center;" data-aos="zoom-in">
                    <div class="three-box pt-3 pb-3">
                        <img class="mb-3" src="./images/led-blitz.png" height="120px;">
                        <h3 class="pt-3">¿Por qué luces LED BLITZ?</h3>
                        <p>Cada día tomamos más conciencia sobre el cuidado del medio ambiente, debido a la disminución cada vez más acelerada de los recursos naturales y al consecuente calentamiento global.</p>
                        <a href="./why_led.php" class="btn btn-success">
                            Leer más...
                        </a>
                    </div>
                </div>
                <div class="col-md-4" style="text-align:center;" data-aos="zoom-in">
                    <div class="three-box pt-3 pb-3">
                        <img class="mb-3" src="./images/estudio-fotometrico.png" height="120px;">
                        <h3 class="pt-3">Estudio Fotométrico</h3>
                        <p>Consideramos que la realización de un estudio fotométrico es esencial para definir la clase de luminarias y el lugar correcto donde deben ir, tomando en cuenta el juego de sombras y baño de luces falsas.</p>
                        <a href="./estudio-fotometrico.php" class="btn btn-success">
                            Leer más...
                        </a>
                    </div>
                </div>
                <div class="col-md-4" style="text-align:center;" data-aos="zoom-in">
                    <div class="three-box pt-3 pb-3">
                        <img class="mb-3" src="./images/roadwaylighting.png" height="120px;">
                        <h3 class="pt-3">LEDIGCO y la norma RETILAP</h3>
                        <p id="three_home_p">Siguiendo los lineamientos de la norma RETILAP, podemos satisfacer las necesidades de
iluminación, para aumentar la productividad y contribuir al ambiente laboral, cumpliendo
con los requisitos que son importantes para usted y su empresa.</p>
                        <a href="./retilap.php" class="btn btn-success">
                            Leer más...
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="home_compromiso" class="container-fluid">
        <h1 data-aos="zoom-in-up">
            Estamos comprometidos con el medio ambiente
        </h1>
    </div>
    <div style="background: #f9f9f9">
        <div class="container pt-5 pb-5">
            <div id="home_prod_box" class="row">
                <div id="home_prod_1" class="col-md-4 mb-4" data-aos="zoom-in-up" data-aos-delay="100">
                    <a href="./productos_iluminacion_1.php" >
                        <div class="p-2" style="background: url('./images/home_prod_1.png');"></div>
                        <h4>Iluminación Exterior Publico</h4>
                    </a>
                </div>
                <div id="home_prod_2" class="col-md-4 mb-4" data-aos="zoom-in-up" data-aos-delay="200">
                <a href="./productos_iluminacion_2.php" >
                        <div class="p-2" style="background: url('./images/home_prod_2.png');"></div>
                        <h4>Iluminación Exterior FLOOD</h4>
                    </a>
                </div>
                <div id="home_prod_3" class="col-md-4 mb-4" data-aos="zoom-in-up" data-aos-delay="300">
                    <a href="./productos_iluminacion_3.php" >
                        <div class="p-2" style="background: url('./images/home_prod_3.png');"></div>
                        <h4>Poste Exterior</h4>
                    </a>
                </div>
                <div id="home_prod_4" class="col-md-4 mb-4" data-aos="zoom-in-up" data-aos-delay="100">
                    <a href="./productos_iluminacion_4.php" >
                        <div class="p-2" style="background: url('./images/home_prod_4.png');"></div>
                        <h4>Iluminación Exterior Canopy</h4>
                    </a>
                </div>
                <div id="home_prod_5" class="col-md-4 mb-4" data-aos="zoom-in-up" data-aos-delay="200">
                    <a href="./productos_iluminacion_5.php" >
                        <div class="p-2" style="background: url('./images/home_prod_5.png');"></div>
                        <h4>Iluminación Non-Linear</h4>
                    </a>
                </div>
                <div id="home_prod_6" class="col-md-4 mb-4" data-aos="zoom-in-up" data-aos-delay="300">
                    <a href="./productos_iluminacion_6.php" >
                        <div class="p-2" style="background: url('./images/home_prod_6.png');"></div>
                        <h4>Tubo LED 18W</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>

<script>
    $('#nav_inicio').addClass('active');
    var home_prod_box_width = $('#home_prod_box .col-md-4 .p-2').width() * .75;
    $('#home_prod_box .col-md-4 .p-2').height(home_prod_box_width);

    if ($( window ).width() > 678 ) {
        var three_home_p =  $('#three_home_p').height();
        $('.three-box p').height(three_home_p);
    }

    $( window ).scroll(function() {
      //  $('header').css('display', 'none');
    });
</script>

<?php
    // FOOTER
    include ('./layout/footer.php');
?>