<?php
    header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header("Connection: close");
    if(!isset($_GET['ts'])){
        $ts = time();
    };

    if( isset($_SERVER['HTTPS'] ) ) {
        $httpHost = "https://".$_SERVER['HTTP_HOST']."/";
    } else {
        $httpHost = "http://".$_SERVER['HTTP_HOST']."/";

    }
    $version = substr( dechex( time()), 0,6);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LED Industrial Group Colombia</title>
    <link rel='shortcut icon' type="image/x-icon" href='<?= $httpHost ?>favicon.png' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='description' content='Somos una empresa de iluminación industrial con certificaciónes para el desarrollo de proyectos de iluminación a gran escala..' />
    <meta property='og:url' content='https://ledigcolombia.com/'>
    <meta property='og:locale' content='es_ES' />
    <meta property='og:type' content='website' />
    <meta property='og:title' content='LED Industrial Group Colombia' />
    <meta property='og:description' content='Somos una empresa de iluminación industrial con certificaciónes para el desarrollo de proyectos de iluminación a gran escala.. ' />
    <meta property='og:site_name' content='LED Industrial Group Colombia' />
    <meta property='og:image' content='<?= $httpHost ?>images/logo500x500_h.jpg' />
    <meta name='twitter:card' content='summary_large_image' />
    <meta name='twitter:description' content='Somos una empresa de iluminación industrial con certificaciónes para el desarrollo de proyectos de iluminación a gran escala.. ' />
    <meta name='twitter:domain' content='LED Industrial Group Colombia' />
    <meta name='twitter:image' content='<?= $httpHost ?>images/logo500x500.jpg' />
    <meta name="description" content="Somos una empresa de iluminación industrial con certificaciónes para el desarrollo de proyectos de iluminación a gran escala.. ">
    <meta name="keywords" content="led, iluminacion, lights, lighth, lightening, luces, ahorro,">
    <meta name="robots" content="index, follow">
    <!-- SCRIPTS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $httpHost ?>css/main.css?v=<?php echo $version; ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= $httpHost ?>css/mobile.css?v=<?php echo $version; ?>" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133295996-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-133295996-1');
    </script>
    <!--AOS Animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>