<?php session_start();
  	require_once('../class/parametes.php');
  	$objParameters = new ClassParameters();
	$objParameters->get_Parameters();

  	$archivo_actual = basename($_SERVER['PHP_SELF']);

  	$captcha_publickey = captcha_publickey;
	$captcha_privatekey = captcha_privatekey;
  	$error_captcha=null;

    // seconds, minutes, hours, days
$expires = 60*60*24*14;
header("Pragma: public");
header("Cache-Control: maxage=".$expires);
header('Expires: ' . gmdate('D, d M Y H:i:s', time()+$expires) . ' GMT');

  	
 ?>

<!DOCTYPE html>
<!-- Marcado de microdatos añadido por el Asistente para el marcado de datos estructurados de Google. -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="es">
<!--<![endif]-->
<head>

<!-- Basic Page Needs ================================================== 
================================================== -->

<meta charset="utf-8">
<title>Sialen Ingenieros|Diseño, Planificación, Desarrollo y Sostenibilidad de Software a la medida, Páginas Web y Programación en general</title>
<meta name="description" content="Empresa de Desarrollo Web, que cuenta con todos los recursos y experiencia para innovar en el mundo digital.">
<meta name="author" content="Sialen">
<meta name="keywords" content="Programacion pagina web, web, Desarrollo sitios web, Sitios web, Diseño Web, Bases de datos, mysql">
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- Mobile Specific Metas ================================================== 
================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!-- CSS ==================================================
================================================== -->

<link rel="stylesheet" href="../css/normalize.css">
<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/skeleton.css">
<link rel="stylesheet" href="../css/screen.css">
<link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css" media="screen" />

<!-- Favicons ==================================================
================================================== -->

<link rel="shortcut icon" href="../images/icon/favicon.ico">
<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">

<!-- Google Fonts ==================================================
================================================== -->

<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<script src="../js/jquery-1.8.0.min.js" type="text/javascript"></script> 
<script>
  $(document).ready(function($) {
    $('html.js body div#header div.container header div.mainmenu div#mainmenu ul.sf-menu li a').each(function() {
      if (/<?= $archivo_actual ?>/.test($(this).attr('href'))) {
        $(this).attr('id', 'visited');
       };          
    });
  });
        
</script>
<body>

<!-- Home - Content Part ==================================================
================================================== -->
<div id="header">
  <div class="container header"> 
    <!-- Header | Logo, Menu
		================================================== -->
    <header>
      <div class="logo"><a href="../index.php"><img itemprop="image" src="../images/logo.png" alt="" /></a></div>
      <div class="mainmenu">
        <div id="mainmenu">
          <ul class="sf-menu">
            <li><a href="../index.php"><span class="home"><img src="../images/home.png" alt="" /></span>Home</a></li>
            <li><a href="about.php"><span class="home"><img src="../images/about.png" alt="" /></span>Nosotros</a></li>
            <li><a href="portfolio.php"><span class="home"><img src="../images/portfolio.png" alt="" /></span>Portafolio</a></li>
            <li><a href="contact.php"><span class="home"><img src="../images/contact.png" alt="" /></span>Contacto</a></li> 
            <li><a href="https://secure28.webhostinghub.com:2096/" target="_blank"><span class="home"><img src="../images/mail.png" alt="" /></span>Corporativo</a></li>
              <!-- <ul>
                <li><a href="../gallery.html">Portfolio Gallery</a></li>
              </ul>
            </li>
            <li><a href="../blog.html"><span class="home"><img src="../images/blog.png" alt="" /></span>Blog</a>
              <ul>
                <li><a href="../singleblog.html">Single Post</a></li>
              </ul>
            </li>
            <li><a href="../features.html"><span class="home"><img src="../images/features.png" alt="" /></span>features</a></li>-->
          </ul>
        </div>
        
        <!-- Responsive Menu -->
        
        <form id="responsive-menu" action="#" method="post">
          <select>
            <option value="">Navigation</option>
            <option value="../index.php">Home</option>
            <option value="about.php">Nosotros</option>
            <option value="portfolio.php">Portafolio</option>
            <option value="contact.php">Contacto</option>
            <option value="https://secure28.webhostinghub.com:2096/" target="_blank">Corporativo</option>
           </select>
        </form>
      </div>
    </header>
  </div>
  <meta itemprop="url" content="http://www.sialen.com">
  <meta itemprop="name" content="Sialen Ingenieros">
  <a href="https://plus.google.com/+MauricioCantorPuentes?rel=author"></a>
</div>
	

		<!-- Desde este punto se crea el cuerpo del html -->