<?php session_start(); ?>
<!DOCTYPE html>
	<html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<link rel="stylesheet" href="css/master.css">
			<title>Control Turnos</title>
			<link rel="stylesheet" href="">
	</head>
	<?php 
		if(isset($_SESSION['Documento'])) session_unset();

		if($_REQUEST['ac']==1){
			require_once('class/logueo.php');

			$login = new ClassLogin;
			$result = $login->loguear($_REQUEST['usuario'],$_REQUEST['pass']);
			if(count($result)>0){
				require_once('class/empresa.php');

				$_SESSION['nom_empl'] = $result['nom_empl'];
				$_SESSION['tipo_usua'] = $result['tipo_usua'];
				$_SESSION['estado_usuario_id_estado'] = $result['estado_usuario_id_estado'];
				$_SESSION['Documento'] = $result['Documento'];
				$_SESSION['apel_empl'] = $result['apel_empl'];
				$_SESSION['tipo_documento_id_tip_doc'] = $result['tipo_documento_id_tip_doc'];

				$login = new Classempresa;
				$result = $login->perfil_empresa($_SESSION['Documento']);
				$_SESSION['perfil']=$result['perfil_id_perf'];

				header('Location: pages/welcome.php');
			}else{
				$mensaje = '¡ Debe Ingresar un Documento y una Contraseña Valida !';
				header('Location: index.php');
			}
		}
		if($_REQUEST['ac']=='perfil'){
			$mensaje = 'Comuniquese con el Administrador para que le asigne un perfil valido en el sistema';
		}
	?>
	<body class="body_index">
		<div id="center_index">
			<div id="titulo">
				<h3>Control Turnos</h3>
			</div>
			<img src="images/IMAGENES VIGILANCIA/vigilancia.jpg" id="img_index">
			<form action="?ac=1" method="post" name="form1" id="form_index">
				<div class="reg_datos" style="text-align:rigth;">Numero Documento: <input type="text" id="usuario" name="usuario" autocomplete="off"></div>
				<div class="reg_datos">Contraseña: <input type="password" id="pass" name="pass" autocomplete="off"></div>
				<input type="submit" value="Ingresar" id="enviar" style="bottom: 15%; position: absolute; right: 17%;"> 
				<?php if(!empty($mensaje)){ ?>
				<span><?php echo $mensaje;?></span>
				<?php } ?>
			</form>
			<?php echo $_SESSION['Documento'];?> 
		</div>
	</body>
</html>