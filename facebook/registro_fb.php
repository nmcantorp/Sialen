<?php session_start();
require_once('src/facebook.php');
require_once('../class/facebook.php');

$config = array();
$config['appId'] = '452770731490324';
$config['secret'] = '262f48371c4dee06f993f8e5fe3674fc';

$facebook = new Facebook($config);
$objFacebook = new ClassFacebook();

$facebook_id = $facebook->getUser();

//

//verifica si el usuario es correcto 
if ($facebook_id!=0) {
	
	//Comprobar si existe el usuario
	$resulta_val = $objFacebook->valida_user($facebook_id);

	if(count($resulta_val)>0){
		//usuario ya existe
		$_SESSION['user_id'] = $resulta_val[0]['user_id'];
		$_SESSION['facebook_id'] = $resulta_val[0]['facebook_id'];
		$_SESSION['username'] = $resulta_val[0]['username'];
		$_SESSION['email'] = $resulta_val[0]['email'];
		$_SESSION['genero'] = $resulta_val[0]['genero'];

	}else{
		//usuario nuevo
		//obtenemos datos del usuario
		$datos = $user_profile = $facebook->api('/me');
		
		$dato = array();
		$dato['facebook_id'] = $facebook_id;
		$dato['username'] = utf8_encode($datos['username']);
		$dato['email'] = utf8_encode($datos['email']);
		$dato['genero'] = utf8_encode($datos['gender']);

		$resulta_insert = $objFacebook->saveUser($dato);

		$_SESSION['facebook_id'] = $facebook_id;
		$_SESSION['username'] = $datos['username'];
		$_SESSION['email'] = $datos['email'];
		$_SESSION['genero'] = $datos['gender'];

	}



}


header("location: ../pages/contact.php");
?>