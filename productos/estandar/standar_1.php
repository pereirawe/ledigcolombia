<?php
    include ('../../layout/header.php');
    include ('../../layout/nav.php');
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 orange-dot pt-3 pb-3">
                <h2 style="color:#ffffff;">Productos Estandar</h2>
                <?php include ('../../layout/nav-products-standar.php'); ?>
            </div>
            <div class="col-md-9 pt-3 pb-5">
                <h2>Lámpara LED Alta Bahia Interior</h2>
                <div class="row">
                    <div class="col-md-12">
                        <embed id="pdf_embed" src="http://ledigcolombia.com/pdf/Standar%201%20GXYZ-036%20-%20LED%20BLITZ%20-%20Alta%20Bah%C3%ADa%20-%20Est%C3%A1ndar.pdf" width="100%" height="550"  type="application/pdf">
                    </div>
                    <a href="https://ledigcolombia.com/pdf/Standar%201%20GXYZ-036%20-%20LED%20BLITZ%20-%20Alta%20Bah%C3%ADa%20-%20Est%C3%A1ndar.pdf" type="button" class="btn btn-primary ml-auto mr-4" target="_new">Descargar Ficha Tecnica.PDF</a>
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