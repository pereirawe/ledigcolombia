<?php
    include ('./layout/header.php');
    include ('./layout/nav.php');
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 blue-dot pt-3 pb-3">
                <h2 style="color:#ffffff;">Productos Premium</h2>
                <?php include ('./layout/nav-products.php'); ?>
            </div>
            <div class="col-md-9 pt-3 pb-5">
                <h2>iK Series Luz de Calle</h2>
                <div class="row">
                    <div class="col-md-12">
                        <embed src="https://ledigcolombia.com/pdf/10%20FICHA%20TECNICA%20iK%20Series%20Luz%20de%20Calle.pdf" width="100%" height="550"  type="application/pdf">
                    </div>
                    <a href="https://ledigcolombia.com/pdf/10%20FICHA%20TECNICA%20iK%20Series%20Luz%20de%20Calle.pdf" type="button" class="btn btn-primary ml-auto mr-4" target="_new">Descargar Ficha Tecnica.PDF</a>
                </div>
            </div>
        </div>
    </div>
<script>
    $('#nav_productos').addClass('active')
    $('#nav_product_10').addClass('active')
</script>
<?php
    // FOOTER
    include ('./layout/footer.php');
?>