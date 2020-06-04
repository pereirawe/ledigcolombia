<?php
    include ('../../layout/header.php');
    include ('../../layout/nav.php');

    $urlPdf = '7 FICHA TECNICA Lampara Solar IA LED BLITZ.pdf';

?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 blue-dot pt-3 pb-3">
                <h2 style="color:#ffffff;">Productos Premium</h2>
                <?php include ('../../layout/nav-products.php'); ?>
            </div>
            <div class="col-md-9 pt-3 pb-5">
                <h2>Lámpara LED Alta Bahia Interior</h2>
                <div class="row">
                    <div class="col-md-12">
                        <embed id="pdf_embed" src="<?= $httpHost ?>pdf/<?= urldecode($urlPdf)?>" width="100%" height="550"  type="application/pdf">
                    </div>
                    <a href="<?= $httpHost ?>pdf/<?= urldecode($urlPdf)?>" type="button" class="btn btn-primary ml-auto mr-4" target="_new">Descargar Ficha Tecnica.PDF</a>
                </div>

            </div>
            
        </div>
    </div>
<script>
    $('#nav_productos').addClass('active')
    $('#nav_product_7').addClass('active')
</script>
<?php
    // FOOTER
    include ('../../layout/footer.php');
?>