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
                <h2>LED Luminaria Exterior IP LED BLITZ</h2>
                <div class="row">
                    <div class="col-md-12">
                        <embed src="https://ledigcolombia.com/pdf/8%20FICHA%20TECNICA%20Exterior%20IP%20LED%20BLITZ.pdf" width="100%" height="550"  type="application/pdf">
                    </div>
                    <a href="https://ledigcolombia.com/pdf/8%20FICHA%20TECNICA%20Exterior%20IP%20LED%20BLITZ.pdf" type="button" class="btn btn-primary ml-auto mr-4" target="_new">Descargar Ficha Tecnica.PDF</a>
                </div>

            </div>
            
        </div>
    </div>
<script>
    $('#nav_productos').addClass('active')
    $('#nav_product_8').addClass('active')
</script>
<?php
    // FOOTER
    include ('./layout/footer.php');
?>