<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require './PHPMailer/Exception.php';
    require './PHPMailer/PHPMailer.php';
    require './PHPMailer/SMTP.php';
	if(isset($_POST['submit'])) {
		$nombre = $_POST['nombre'];
	    $telephone = $_POST['telephone'];
	    $correo = $_POST['email'];
	    $mensaje = $_POST['mensaje'];
        $cuerpo = '<div style="background: #e1e1e1; margin:0px;">
        <div id="container" style="margin: 20px; font-family: sans-serif; background: #ffffff; width: 600px; margin-left: auto; margin-right: auto;">
            <div style="text-align:center; padding: 30px;">
                <img src="https://ledigcolombia.com/images/logo100width.png" alt="" height="90px">
            </div>
            <div style="text-align: left; padding: 20px; background-color: #c1c1c1; color: #333333; ">
                <div style="font-size: large;">Mensaje enviado por: <strong>'.$nombre.'.</strong></div>
                <div><strong>Email:</strong> <a href="mailto:'.$correo.'">'.$correo.'</a></div>
                <div><strong>Teléfono:</strong> '.$telephone.'</div>
            </div>
            <div style="padding-top: 30px; padding-bottom: 50px; color: #333333;">
                <blockquote>
                    <q>'.$mensaje.'</q>
                </blockquote>
            </div>
            <div style="background-color: rgb(0, 31, 140) ; color:#ffffff; text-align: center; padding-top: 50px; padding-bottom: 50px; ">
                <i style="width: 80%; display: block; margin-left: auto; margin-right: auto; font-size: small;">La mayoría de las personas suelen tener miedos y dudas antes de adquirir un producto en línea, pero si se encuentran con una tienda que responda a cada una de ellos con algo positivo, seguramente terminarán comprando en ella.</i>
            </div>
        </div>
        </div>';
        $mail = new PHPMailer(true);                              
        try {
            //$mail->isSMTP(); DESHABILITADO
            $mail->CharSet = 'UTF-8';
            $mail->Host = 'ssl://smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'pereirawe@gmail.com';
            $mail->Password = 'Maracaibo01*';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->Timeout = 30;
            $mail->AuthType = 'LOGIN';
            //Recipients   
            $mail->setFrom('no-responder@ledigcolombia.com');
            $mail->addAddress('hansbecker@ledigcolombia.com');
            $mail->addAddress('hansjbeckerr@gmail.com');
            // $mail->addAddress('pereirawe@gmail.com');
            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = 'Un cliente te ha enviado un mensaje';
            $mail->Body = $cuerpo;
            $mail->send();
            //echo 'El mensaje ha sido enviado';
            echo "<script>
                alert('Mensaje enviado');
                window.location.replace('http://ledigcolombia.com');
            </script>";
        } catch (Exception $e) {
            // echo 'El mensaje no pudo ser enviado. Mailer Error: ', $mail->ErrorInfo;
            echo "<script>
                alert('Mensaje no enviado. Mailer Error: ". $mail->ErrorInfo." ');
                window.location.replace('http://ledigcolombia.com');
            </script>";
        }
        //echo $cuerpo;
    }
    echo "<script>
        alert('Mensaje no enviado');
        window.location.replace('http://ledigcolombia.com');
    </script>";
    // header('Location: ./');
?>