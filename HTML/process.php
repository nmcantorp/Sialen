<?php 

	ini_set( "sendmail_from", "topomajor@gmail.com" );
    ini_set( "SMTP", "smtp.gmail.com" );
    ini_set("smtp_user","topomajor@gmail");
    ini_set("smtp_pass","1022323548");

$toemail = 'test@youremail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
if(mail($toemail, 'Subject', $message, 'From: ' . $email)) {
	echo 'Your email was sent successfully.';
} else {
	echo 'There was a problem sending your email.';
}
?>