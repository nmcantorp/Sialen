<?php require_once('../comunes/cabezote_int.php');
	require_once('../class/recaptcha/recaptchalib.php'); 

$val_name = '';
$val_mail = '';
$val_message = '';
//print_r($_SESSION);
if (isset($_SESSION['error_captcha_contact']) && !is_null($_SESSION['error_captcha_contact'])) {

 	$error_captcha = $_SESSION['error_captcha_contact'];
 	$val_name = $_SESSION['name_contact'];
	$val_mail = $_SESSION['email_contact'];
	$val_message = $_SESSION['message_contact'];
}

if(isset($_SESSION['email'])){
	$val_mail = $_SESSION['email'];
}

 ?>
 <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'white',
    lang : 'es'
 };
 </script>
<!-- Contact Content Part - GoogleMap ==================================================
================================================== -->
<section class="map"> 
  <!-- google map -->
  <div class="map-holder">
    <div class="map-container">
      <iframe class="map" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Soacha,+Colombia&amp;aq=0&amp;oq=M%C3%BCnchen&amp;sll=36.648,-95.677068&amp;sspn=53.212719,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=Soacha,+ciudad verde,+Colombia&amp;t=m&amp;ll=4.75365,-74.196139&amp;spn=0.347588,2.635345&amp;z=10&amp;iwloc=A&amp;output=embed"></iframe>
      <!-- end google map --> 
    </div>
    <!--map-container ends here--> 
  </div>
  <!--map-holder ends here--> 
</section>

<!-- Contact Content Part - Contact Form ==================================================
================================================== -->
<div class="container">
  <div class="blankSeparator"></div>
  <!-- Contact Sidebar ==================================================
================================================== -->
  <div class="one_third contactsidebar">
    <section class="first">
      <h3>Información de Ubicación</h3>
      <div class="boxtwosep"></div>
      <ul class="contactsidebarList">
        <li>Tv 28 # 24 - 65 Trr 9 Of. 101</li>
        <li>Teléfono: 9006820</li>
        <!-- <li>Fax: (1800) 987-12341</li> -->
        <li>Website: <a href="#" title="">http://www.sialen.com</a></li>
        <li>Email: <a href="#" title="">info@sialen.com</a></li>
      </ul>
    </section>
    <section class="first">
      <h3>Para contactos Directos</h3>
      <div class="boxtwosep"></div>
      <ul class="contactsidebarList">
        <li>Anderson Gacharna <br>
        Director de Proyectos <br>
        Email: <a href="#" title="">proyectos@sialen.com</a></li>
      </ul>
      <div class="boxtwosep"></div>
      <ul class="contactsidebarList">
        <li>Stefano Escobar <br>
        Análisis y Diseño de Bases de Datos<br>
        Email: <a href="#" title="">dba@sialen.com</a></li>
      </ul>
      <div class="boxtwosep"></div>
      <ul class="contactsidebarList">
        <li>Mauricio Cantor <br>
        Desarrollo Software<br>
        Email: <a href="#" title="">programacion@sialen.com</a></li>
      </ul>
      <div class="boxtwosep"></div>
      <ul class="contactsidebarList">
        <li>Nicolás García <br>
        Soporte técnico<br>
        Email: <a href="#" title="">soporte@sialen.com</a></li>
      </ul>
    </section>
    <section class="third">
    <?php if(!isset($_SESSION['username'])){ ?>
      <h3>Registro y/o Logueo</h3>
      <div class="boxtwosep"></div>
      <h5><span class="color"></span>Regístrese y reciba novedades</h5>
      <p><a href="../facebook/login_fb.php">Facebook</a></p>
    <?php }else{ ?>
      <h3>Usuario</h3>
      <div class="boxtwosep"></div>
      <h5><span class="color"></span>Nombre de usuario</h5>
      <p><?php echo $_SESSION['username'] ?></p>
    <?php } ?>
    </section>
  </div>
  <!-- one_third ends here -->
  <div class="two_third lastcolumn contact1">
    <div id="contactForm">
      <h2>Déjanos un comentario</h2>
      <div class="sepContainer"></div>
      <form action="../class/procesar_email.php?ac=contact" method="post" id="contact_form">
        <div class="name">
          <label for="name">Tu nombre:</label>
          <p>Por favor ingresa tu nombre completo</p>
          <input id="name" name="name" type="text" placeholder="Sr. John Smith" value="<?= $val_name ?>" required />
        </div>
        <div class="email">
          <label for="email">Tu Email:</label>
          <p> Por favor ingresa tu Correo Electrónico</p>
          <input id="email" name="email" type="email" placeholder="ejemplo@Dominio.com" value="<?= $val_mail ?>" required />
        </div>
        <div class="message">
          <label for="message">Tu mensaje:</label>
          <p>Por favor ingresa tu inquietud y/o tu mensaje</p>
          <textarea id="message" name="message" rows="6" cols="10" required><?= $val_message ?></textarea>
        </div>
        <div class="captcha">
        	<?php if (isset($_SESSION['error_captcha_contact']) && !is_null($_SESSION['error_captcha_contact'])) { ?>
        		<div id="error_captcha"><?php echo $error_captcha; ?></div>
        	<?php } ?>
        	<?php echo recaptcha_get_html($captcha_publickey, $error_captcha); ?>
        </div>
        <div id="loader">
          <input type="submit" value="Enviar" />
        </div>
      </form>
    </div>
    <!-- end contactForm --> 
  </div>
</div>
<div class="blankSeparator2"></div>
<!--Footer ==================================================
================================================== -->
<?php 
		unset($_SESSION['error_captcha_contact']);
require_once('../comunes/pie_int.php'); ?>