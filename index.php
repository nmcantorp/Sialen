<?php require_once('comunes/cabezote.php'); ?>

<!-- Home Content Part - Slider ==================================================
================================================== -->
<div class="flexslider">
  <ul class="slides">
    <li> <a href="#"><img src="images/flexslider/3.png" alt=""/></a> 
	    <p class="flex-caption">Diseño de Sistemas de información, integrando Código Libre.</p>
	</li>
    <li> <img src="images/flexslider/4.png" alt="" /> </li>
    <li> <a href="#"><img src="images/flexslider/5.png" alt="" /></a>
    	<p class="flex-caption">Todas las herramientas en la palma de la mano.</p>
    </li>
  </ul>
</div>
<!-- Home Content Part - Box One ==================================================
================================================== -->
<div class="blankSeparator"></div>
<div class="container">
  <div class="info">
    <div class="one_third">
      <h2>Desarrollo Web y SIG</h2>
      <p>Estructuras, diseño web, consultoría y estudios demográficos a través de los sistemas de información geográfico, especializado en logística, apertura de canales, mercadeo y zonificaciones, brindando los alcances necesarios en la realización de los proyectos en los que estamos involucrados.</p>
      <a href="pages/about.php" title="" class="buttonhome">&rarr; Mas detalles...</a> </div>
    <div class="two_third lastcolumn">
      <div class="one_half">
        <h2>Análisis y diseño de base de datos.</h2>
        <p>Servicios para la creación, depuración y administración de bases de datos, con un completo acompañamiento en el levantamiento de información, que permita satisfacer todas las necesidades de nuestros clientes, aportando a sus negocios el completo servicio en reporteadores, almacenamiento y seguridad de su información.</p>
        <a href="pages/about.php" title="" class="buttonhome">&rarr; Mas detalles...</a> </div>
      <div class="one_half lastcolumn">
        <h2>Soporte Técnico</h2>
        <p>Asistencia presencial o remota, en los complementos de desarrollos y equipos de nivel empresarial o individual, garantizando la seguridad en cuanto a Laptops, y PC’s.</p>
        <a href="pages/about.php" title="" class="buttonhome">&rarr; Mas detalles...</a> </div>
    </div>
  </div>
</div>
<!-- container ends here --> 

<!-- Home Content Part - Box Two ==================================================
================================================== -->
<div class="container clients">
  <div class="sepContainer"></div>
  <h2>Nuestros Clientes</h2>
  <div class="one_sixth"> <img src="images/client1.png" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="images/client2.png" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="images/client3.png" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="images/client4.png" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth lastcolumn"> <img src="images/client5.png" alt=""/> </div>
  <!-- end one_sixth 
  <div class="one_sixth"> <img src="images/client6.jpg" alt=""/> </div>-->
  <!-- end one_sixth lastCol --> 
</div>
<!-- end container --> 
<!-- Home Content Part - Box Three ==================================================
================================================== -->
<div class="container boxthree">
  <div class="sepContainer1"><!-- --></div>
  <div class="blankSeparator"></div>
  <div class="one_third">
    <section class="boxthreeleft"> <img src="images/home/1.png" alt=""/>
      <h3>Tecnologías de Desarrollo </h3>
      <p id="text_bajo1">Desarrollo de soluciones con base en tecnologías Web Open Source, teniendo presente el concepto de POO (Programación Orientada a Objetos), implementando seguridad acorde a las necesidades del cliente, sin dejar de lado la versatilidad y los proyectos de software a la medida.</p>
      <!-- <a class ="simple" href="#">+ Ver mas</a> --></section> 
  </div>
  <!-- one-third column ends here -->
  <div class="one_third">
    <section class="boxthreecenter"> <img src="images/home/2.png" alt=""/>
      <h3>Ideas Innovadoras</h3>
      <p id="text_bajo2">Mantener un pensamiento creativo que permita desarrollar ideas innovadoras, planteadas desde nuestros aliados, otorgando acceso a las herramientas e infraestructura necesaria, generando la solución de los proyectos en los que se presenten posibilidad de negocios, con base en la  implementación de herramientas informáticas y soluciones digitales.</p>
      <!-- <a class ="simple" href="#">+ Ver mas</a> --> </section>
  </div>
  <!-- one-third column ends here -->
  <div class="one_third lastcolumn">
    <section class="boxthreeright"> <img src="images/home/3.png" alt=""/>
      <h3>Diseños Modernos</h3>
      <p id="text_bajo3">Desarrollo de sistemas de información teniendo en cuenta diseños muy cómodos, para facilitar el uso del mismo, enfocándose en el ajuste de las plataformas de acuerdo a los dispositivos donde el usuario desee visualizarlo.</p>
      <!-- <a class ="simple" href="#">+ Ver mas</a> --></section> 
  </div>
  <!-- one-third column ends here --> 
</div>
<!-- container ends here -->
<div class="blankSeparator1"></div>

<script>
$(document).ready(function(){
	$('#div_left').fadeToggle();
	valida_visible = 0;
	$('#abrir_not').click(function(){
		$('#div_left').fadeToggle();
		if(valida_visible == 0){
			$('#abrir_not img').attr('src','images/icon/favicon3.ico');
			valida_visible = 1;

		}else{
			$('#abrir_not img').attr('src','images/icon/favicon2.ico');
			valida_visible = 0;
		}
	});


	$(".left_content").each(function() {
		$(this).click(function(){
			id_dialog = $(this).attr("id").substring(12);
			$( "#dialog"+id_dialog ).dialog();
			
	  	});
	});

	
});
</script>

<!-- <div id="div_left" class="estilo"><!-- 
	<?php for ($i=0; $i < count($ResulNoticias) ; $i++) { 
		
	 ?>
	<div id="left_content<?= $ResulNoticias[$i]['id_noticia'] ?>" class="left_content">
		<span><?= date_format(date_create($ResulNoticias[$i]['fech_noticia']), 'Y-m-d'); ?></span>
		<h4><?= $ResulNoticias[$i]['titulo_noticia']; ?><span>>></span> </h4>
	</div>
	<div id="dialog<?= $ResulNoticias[$i]['id_noticia'] ?>" style="display:none;" title="<?= $ResulNoticias[$i]['titulo_noticia']; ?>">
		<?= $ResulNoticias[$i]['detalle_noticia']; ?>
	</div>
	
	<?php } ?>
	 --
	<a class="twitter-timeline"  href="https://twitter.com/NMCANTORP"  data-widget-id="420319085038034944">Tweets por @NMCANTORP</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	<div id="center_index">
		<div id="titulo1">
			<h3>Registrese</h3>
		</div>
		<!-- <img src="images/IMAGENES VIGILANCIA/vigilancia.jpg" id="img_index"> --
		<form action="?ac=1" method="post" name="form1" id="form_index">
			<div class="reg_datos" style="text-align:left;">Email: <input type="email" id="usuario" name="usuario" autocomplete="off"></div>
			<input type="submit" value="Ingresar" id="enviar" style="bottom: 15%; position: absolute; right: 17%;"> 
			<?php if(!empty($mensaje)){ ?>
			<span><?php echo $mensaje;?></span>
			<?php } ?>
		</form>
		<?php echo $_SESSION['Documento'];?> 
		<div></div>
		<a href="facebook/login_fb.php" target="_blank" onclick="window.open(this.href,this.target,'width=1000,height=600,top=200,left=100,toolbar=no,location=no,status=no,menubar=no',document.title='prueba');return false;">Registrarse</a> 
	</div>

	

</div>

<div id="div_rigth" class="estilo">
	<div class="estilo2">
		<h4><img src="images/Disco_duro_logo.png" alt="" />El pasaje estándar Lorem Ipsum, usado desde el año 1500.</h4>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
	</div>
	<div class="estilo2">
		<h4><img src="images/Disco_duro_logo.png" alt="" />El pasaje estándar Lorem Ipsum, usado desde el año 1500.</h4>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
	</div>
	<div class="estilo2">
		<h4><img src="images/Disco_duro_logo.png" alt="" />El pasaje estándar Lorem Ipsum, usado desde el año 1500.</h4>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
	</div>
	
</div>
<div id="abrir_not">
	Noticias <img src="images/icon/favicon2.ico">
</div>
<div></div> -->
	
<?php require_once('comunes/pie.php'); ?>