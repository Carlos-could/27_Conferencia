<!doctype html>
<html class="no-js" lang="">

  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&family=Oswald:wght@200;300;400;500;600;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <?php
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);
      if($pagina == 'invitados' || $pagina == 'index'){
         echo '<link rel="stylesheet" href="css/colorbox.css">';
      } else if($pagina == 'conferencia') {
         echo '<link rel = "stylesheet" href="css/lightbox.css">';
      }
     ?>

    <link rel="stylesheet" href="css/main.css">

    <meta name="theme-color" content="#fafafa">
  </head>

  <body class="<?php echo $pagina; ?>">
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

     <header class="site-header">
        <div class="hero">
           <div class="contenido-header">
              <nav class="redes-sociales">
                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                 <a href="#"><i class="fab fa-twitter"></i></a>
                 <a href="#"><i class="fab fa-pinterest"></i></a>
                 <a href="#"><i class="fab fa-youtube"></i></a>
                 <a href="#"><i class="fab fa-instagram"></i></a>
              </nav>

              <div class="informacion-evento">
                 <div class="clearfix">
                    <p class="fecha"><i class="fas fa-calendar-alt"></i>  10-12 Dic</p>
                    <p class="ciudad"><i class="fas fa-map-marker-alt"></i>  München Deutschland</p>
                 </div>
                 <h1 class="nombre-sitio">MünchenWebCamp</h1>
                 <p class="slogan">La mejor conferencia de <span>diseño web</span></p>
              </div> <!-- informacion de evento -->

           </div>
        </div>
     </header>

     <div class="barra">
        <div class="contenedor clearfix">

           <div class="logo">
             <a href="index.php">
              <img src="img/logo.svg" alt="logo">
            </a>
           </div>
           <div class="menu-movil">
              <span></span>
              <span></span>
              <span></span>
           </div>
           <nav class="navegacion-principal">
              <a href="conferencia.php">Conferencia</a>
              <a href="calendario.php">Calendario</a>
              <a href="invitados.php">Invitados</a>
              <a href="registro.php">Reservaciones</a>
           </nav>
        </div><!--contenedor-->
     </div> <!--barra-->
