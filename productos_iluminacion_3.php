<?php
    include ('./layout/header.php');
    include ('./layout/nav.php');
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 blue-dot pt-3 pb-3">
                <h2 style="color:#ffffff;">Menu de Productos</h2>
                <?php include ('./layout/nav-products.php'); ?>
            </div>
            <div class="col-md-9 pt-3 pb-5">
                <h2>Poste Exterior - SB LED BLITZ</h2>
                <img src="./images/3_iluminacion_poste_exterior.png" width="100%">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Sistema óptico:</h4>
                        <ul>
                            <li>Lentes de precisión hechos de policarbonato Mitsubishi de máxima intensidad lumínica</li>
                            <li>Diseñado para proveer la correcta cantidad de luz para áreas pequeñas o medianas</li>
                            <li>Suministra confort lumínico al reducir deslumbramiento, al proveer un baño de luz más amplio, uniforme y más apropiado haz de luz.</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Construcción:</h4>
                        <ul>
                        <li>Diseñado para aplicación comercial e industrial, temperaturas adaptables, mejor brillo y mayor cantidad de horas de encendido.</li>
                        <li>La estructura eléctrica está térmicamente aislada de los componentes del driver.</li>
                        <li>Recubrimiento en pintura resistente a los rayos UV.</li>
                        <li>Dirección horizontal o vertical</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Montaje:</h4>
                        <ul>
                            <li>Existen 5 montajes diferentes para ajustarse a cualquier tipo de poste y simplificar la instalación.</li>
                            <li>Adaptabilidad a los requerimientos adicionales según tipo de poste.</li>
                            <li>Compatible con áreas de alta humedad.</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Electricidad:</h4>
                        <ul>
                            <li>Cantidad de horas: 50.000+</li>
                            <li>Driver de alta eficiencia: entre 93.5% a mínimo 87.5%</li>
                            <li>Dimmerizable: 1-10V/PMW / Timer; 3 Ajustes; DIM a apagado con suspensión de corriente ≤ 0.5W</li>
                            <li>LED Chip: Luxeon</li>
                        </ul>
                    </div>
                    <a href="https://ledigcolombia.com/pdf/3%20FICHA%20TECNICA%20Poste%20Exterior%20SB-LED%20BLITZ.pdf" type="button" class="btn btn-primary ml-auto mr-4" target="_new">Descargar Ficha Tecnica.PDF</a>
                </div>

            </div>
            
        </div>
    </div>
<script>
    $('#nav_productos').addClass('active')
    $('#nav_product_3').addClass('active')
</script>
<?php
    // FOOTER
    include ('./layout/footer.php');
?>