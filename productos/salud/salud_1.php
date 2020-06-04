<?php
    include ('../../layout/header.php');
    include ('../../layout/nav.php');
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 orange-dot pt-3 pb-3">
                <h2 style="color:#ffffff;">Especial Salud</h2>
                <?php include ('../../layout/nav-products-salud.php'); ?>
            </div>
            <div class="col-md-9 pt-3 pb-5">
                <h2>Lámpara de esterilización y desinfección Rayos UV + Ozono</h2>
                <div class="row">
                    <div class="col-md-12">
                        <embed id="pdf_embed" src="<?= $httpHost ?>pdf/<?= urldecode('Brochure Lámpara Esterilizadora de UV y Ozono LED BLITZ por LEDIGCO.pdf')?>" width="100%" height="550"  type="application/pdf">
                    </div>
                    <a href="<?= $httpHost ?>pdf/<?= urldecode('Brochure Lámpara Esterilizadora de UV y Ozono LED BLITZ por LEDIGCO.pdf')?>" type="button" class="btn btn-primary ml-auto mr-4" target="_new">Descargar Ficha Tecnica.PDF</a>
                </div>

            </div>
            
        </div>
    </div>
<script>
    $('#nav_productos_standar').addClass('active')
    $('#nav_product_1').addClass('active')
</script>
<?php
    // FOOTER
    include ('../../layout/footer.php');
?>