<?php
    include ('../../layout/header.php');
    include ('../../layout/nav.php');

    $urlPdf = '6 FICHA TECNICA Tubo LED 18W T802-18 LED BLITZ.pdf';

?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 blue-dot pt-3 pb-3">
                <h2 style="color:#ffffff;">Productos Premium</h2>
                <?php include ('../../layout/nav-products.php'); ?>
            </div>
            <div class="col-md-9 pt-3 pb-5">
                <h2>Tubo LED 18W T802-18 LED BLITZ</h2>
                <embed id="pdf_embed" src="<?= $httpHost ?>pdf/<?= urldecode($urlPdf)?>" width="100%" height="550"  type="application/pdf">
                <div class="row">
                <div class="col-md-3">
                        <h4>Sistema óptico:</h4>
                        <ul>
                            <li>Eficiencia de energía clase: A++</li>
                            <li>LEDs patentados: 0.06 SMD como fuente de luz. Con 144 diodos de alta calidad.</li>
                            <li>Pasó las pruebas de algo voltaje sobre 4000V</li>
                            <li>Menos de 10V de fuga durante operación.</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Construcción:</h4>
                        <ul>
                            <li>Diseñado para aplicación comercial e industrial, mejor brillo y mayor cantidad de horas de encendido.</li>
                            <li>La estructura eléctrica está térmicamente aislada de los componentes del driver interno.</li>
                            <li>Angulo de 120°</li>
                            <li>Cubierta en PC lechosa</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Montaje:</h4>
                        <ul>
                            <li>Para ajustarse a cualquier tipo de conexión T8 fluorescente, con el mismo socket y para adaptar al tipo de lámpara existente.</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Electricidad:</h4>
                        <ul>
                            <li>Cantidad de horas: 50.000+</li>
                            <li>Driver de alta eficiencia: Protección de corto circuito; bajo voltaje; y exceso de temperatura.</li>
                            <li>Temperaturas ambiente: -23°C a + 50°C</li>
                        </ul>
                    </div>
                    <a href="<?= $httpHost ?>pdf/<?= urldecode($urlPdf)?>" type="button" class="btn btn-primary ml-auto mr-4" target="_new">Descargar Ficha Tecnica.PDF</a>
                </div>

            </div>
            
        </div>
    </div>
<script>
    $('#nav_productos').addClass('active')
    $('#nav_product_6').addClass('active')
</script>
<?php
    // FOOTER
    include ('../../layout/footer.php');
?>