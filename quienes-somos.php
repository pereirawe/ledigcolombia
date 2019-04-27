<?php
    include ('./layout/header.php');
    include ('./layout/nav.php');
?>
    <div class="blue-dot" style="color: #ffffff;">
    <div class="container-fluid pt-3 pb-5" >
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3" style="background: url('./images/building.jpeg');background-size: cover; background-position: center center; min-height:220px" data-aos="fade-right">
                
            </div>
            <div class="col-md-6 p-3">
                <h1 class="mb-5 mt-5">QUIENES SOMOS</h1>
                <p>LED Industrial Group Colombia (LEDIGCO) es una empresa especializada en soluciones de iluminación con tecnología LED.</p>
                <p>Nuestro objetivo es la venta de luminarias LED, en el sector industrial, a partir de la asesoría en el diseño y con base en estudios fotométricos ajustados a la norma RETILAP Y RETIE.  </p>
                <p>Nos enfocamos en iluminación LED de alta calidad, que contribuye a reducir la huella de carbono, velando de esta forma por la conservación del medio ambiente. </p>
                <div class="mb-4" style="text-align:center;">
                    <img src="./images/led-blitz.png" alt="" width="180px">
                </div>
                
                <div id="logos" class="p-4 mb-4" style="color:#fafafa;">
                    <p class="mb-3">Contamos con productos certificados a nivel internacional.</p>
                    <img class="logo" src="./images/lg_2.png">
                    <img class="logo" src="./images/lg_3.png">
                    <img class="logo" src="./images/lg_4.png">
                    <img class="logo" src="./images/lg_5.png">
                    <img class="logo" src="./images/lg_1.png">
                </div>
                <p>Además, tenemos certificado de conformidad emitido por LENOR Colombia SAS, entidad acreditada por la ONAC (Organismo Nacional de Acreditación de Colombia).</p>
                    <div style="text-align:center;">
                        <img class="logo" src="./images/lg_lenor.jpeg" width="100px">
                    </div>

            </div>
            <div class="col-md-2"></div>
        </div>

    </div>
    </div>

<script>
    $('#nav_quienes_somos').addClass('active')
</script>
<?php
    // FOOTER
    include ('./layout/footer.php');
?>