<?php
require_once('src/facebook.php');

$config = array();
$config['appId'] = '452770731490324';
$config['secret'] = '262f48371c4dee06f993f8e5fe3674fc';

$facebook = new Facebook($config);

$params = array(
  'scope' => 'email',
  'redirect_uri' => 'http://localhost/sialen/facebook/registro_fb.php'
);

$loginUrl = $facebook->getLoginUrl($params);

header("location: $loginUrl");
?>


<a href="<?= $loginUrl?>">Loguear</a>
