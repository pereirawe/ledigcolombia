<?php
    include ('../../layout/header.php');
    include ('../../layout/nav.php');

    $urlPdf = '1 FICHA TECNICA Iluminación Exterior Público - PA LED BLITZ.pdf';

?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 blue-dot pt-3 pb-3">
                <h2 style="color:#ffffff;">Productos Premium</h2>
                <?php include ('../../layout/nav-products.php'); ?>
            </div>
            <div class="col-md-9 pt-3 pb-5">
                <h2>Iluminación Exterior Público - PA LED BLITZ</h2>
                <embed id="pdf_embed" src="<?= $httpHost ?>pdf/<?= urldecode($urlPdf)?>" width="100%" height="550"  type="application/pdf">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Sistema óptico:</h4>
                        <ul>
                            <li>Lentes de precisión hechos de policarbonato Mitsubishi de máxima intensidad lumínica</li>
                            <li>Diseñado para proveer la correcta cantidad de luz para áreas grandes y medianas.</li>
                            <li>Suministra confort lumínico: reduce deslumbramiento; un baño de luz más amplio, uniforme y más apropiado haz de luz.</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Construcción:</h4>
                        <ul>
                            <li>Diseñado para aplicación comercial e industrial, temperaturas adaptables, mejor brillo y mayor cantidad de horas de encendido.
                            <li>La estructura eléctrica está térmicamente aislada de los componentes del driver.</li>
                            <li>Recubrimiento en pintura resistente a los rayos UV y corrosión.</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Montaje:</h4>
                        <ul>
                            <li>Para ajustarse a cualquier tipo de estructura y simplificar la instalación.</li>
                            <li>Adaptabilidad a los requerimientos adicionales.</li>
                            <li>Compatible con áreas de alta humedad.</li>
                            <li>Se puede ajustar de -15% hasta +15% en el ángulo requerido.</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Electricidad:</h4>
                        <ul>
                            <li>Cantidad de horas: 50.000+</li>
                            <li>Driver de alta eficiencia: Protección de corto circuito; bajo voltaje; y exceso de temperatura.</li>
                            <li>Dimmerizable: 1-10V/PMW / Timer; 3 Ajustes; DIM a apagado con suspensión de corriente ≤ 0.5W</li>
                            <li>Temperaturas: -40°C a + 50°C</li>
                        </ul>
                    </div>
                    <a href="<?= $httpHost ?>pdf/<?= urldecode($urlPdf)?>" type="button" class="btn btn-primary ml-auto mr-4" target="_new">Descargar Ficha Tecnica.PDF</a>

                </div>

            </div>
            
        </div>
    </div>
<script>
    $('#nav_productos').addClass('active')
    $('#nav_product_1').addClass('active')
</script>
<?php
    // FOOTER
    include ('../../layout/footer.php');
?>