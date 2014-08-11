<?php require_once('../comunes/cabezote_int.php');
	//require_once('../class/recaptcha/recaptchalib.php'); 

echo $_REQUEST['resultado'];

if(isset($_SESSION['email'])){
	$val_mail = $_SESSION['email'];
}

 ?>
 <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'white',
    lang : 'es'
 };

$(document).ready(function(){
  $('#enviar').click(function(){
    alert('aca');
    <?= exec('psexec -d C:\wamp\bin\php\php5.4.12\php.exe -f C:\wamp\www\sialen\class\procesar_email -- campania'); ?>
  });



 });
});
 </script>

<!-- Contact Content Part - Contact Form ==================================================
================================================== -->
<div class="container">
  <div class="blankSeparator"></div>
  <!-- Contact Sidebar ==================================================
================================================== -->
  <!-- one_third ends here -->
  <div class="two_third lastcolumn contact1">
    <div id="contactForm">
      <h2>Déjanos un comentario</h2>
      <div class="sepContainer"></div>
      <form action="#" method="post" id="contact_form">
      	<?php if($_REQUEST['resultado']) echo "Se enviaron un total de ".$_REQUEST['resultado']." Correos " ?>
        <div class="name">
          <label for="name">Tu nombre:</label>
          <p>Por favor ingresa tu nombre completo</p><!-- 
          <input id="name" name="name" type="text" placeholder="Sr. John Smith" value="<?= $val_name ?>" required /> -->
        </div>
        <div class="email">
          <label for="email">Tu Email:</label>
          <p> Por favor ingresa tu Correo Electrónico</p>
          <!-- <input id="email" name="email" type="email" placeholder="ejemplo@Dominio.com" value="<?= $val_mail ?>" required /> -->
        </div>
        <div class="message">
          <label for="message">Tu mensaje:</label>
          <p>Por favor ingresa tu inquietud y/o tu mensaje</p>
          <!-- <textarea id="message" name="message" rows="6" cols="10" required><?= $val_message ?></textarea> -->
        </div>
        <div class="captcha">
        	<?php if (isset($_SESSION['error_captcha_contact']) && !is_null($_SESSION['error_captcha_contact'])) { ?>
        		<div id="error_captcha"><?php echo $error_captcha; ?></div>
        	<?php } ?>
        	<?php //echo recaptcha_get_html($captcha_publickey, $error_captcha); ?>
        </div>
        <div id="loader">
          <input type="submit" value="Enviar" id="enviar"/>
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