<?php
require_once('src/facebook.php');

$config = array();
$config['appId'] = appId_fb;
$config['secret'] = secret_fb;

$facebook = new Facebook($config);

$params = array(
  'scope' => 'email',
  'redirect_uri' => redirect_uri_fb
);

$loginUrl = $facebook->getLoginUrl($params);

header("location: $loginUrl");
?>


<a href="<?= $loginUrl?>">Loguear</a>
