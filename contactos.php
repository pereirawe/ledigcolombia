<?php
    include ('./layout/header.php');
    include ('./layout/nav.php');
?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div class="blue-dot" style="color:;">
        <div class="container pb-5" >
            <div class="row mb-5">
                <div class="col-md-3"></div>
                <div class="col-md-6 mt-5 mb-5 p-4" style="background: #ffffff; box-shadow: 3px 3px 10px rgba(0, 0, 0, .3);" data-aos="zoom-in">
                    <h1>Contáctanos</h1>
                    <p>A través de nuestras mensajería podemos atenderle 24h</p>
                     <?php
                                
                            
                                                    
                            if (isset($_GET['error']) == 1){
                            echo"<h3 style='color:#FF0000 '>Debe marcar que no es un robot</h3>";
                            }
                            
                           
                            
                                                    
                        ?>
                    <form action="./mail.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nombre y apellidos</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Dirección de correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="" required>
                            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo electrónico con nadie más.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Teléfono de contacto</label>
                            <input type="text" class="form-control" id="telephone" name="telephone" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Dejanos un mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="4"></textarea>
                        </div>
                         <div class="g-recaptcha" data-sitekey="6Ld-TsUUAAAAALDZPgbPjyKK3rfumV68aHz5TycE"></div>
                        <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                       
                    </form>
                </div>
                <div class="col-md-3"></div>
    
            </div>
        </div>
    </div>

<script>
    $('#nav_contactos').addClass('active')
</script>
<?php
    // FOOTER
    include ('./layout/footer.php');
?>