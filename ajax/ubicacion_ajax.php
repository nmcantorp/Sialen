<?php 

require_once('../class/ciudad.php');
$obj_ciudad = new Classciudad();
if($_REQUEST['ac']=="localidad"){

$localidad = $obj_ciudad->getLocalidad($_REQUEST['ciudad']);
?>
<select id='sel_localidad' name='sel_localidad' onchange="javascript:ver_Barrio(this)" required>
	<option value="">- Localidad -</option>
  	<!-- <option value="11001">BOGOTA</option> -->
  	<?php for ($i=0; $i < count($localidad); $i++) { ?>
  	
  	<option value="<?= $localidad[$i]['id_loc']?>"><?php echo utf8_encode($localidad[$i]['nom_loc']) ?></option>
  	
  <?php	} ?>
</select>
<?php 
}

if($_REQUEST['ac']=="barrio"){

$Barrio = $obj_ciudad->getBarrio($_REQUEST['localidad']);
?>
<select id='sel_barrio' name='sel_barrio' onchange="javascript:ver_ubicacion(this)" required>
	<option value="" >- Barrio -</option>
  	<!-- <option value="11001">BOGOTA</option> -->
  	<?php for ($i=0; $i < count($Barrio); $i++) { ?>
  	
  	<option value="<?= $Barrio[$i]['id_barrio']?>"><?php echo utf8_encode($Barrio[$i]['nom_barrio']) ?></option>
  	
  <?php	} ?>
</select>
<?php 
}

if($_REQUEST['ac']=="ubicar"){
	if($_REQUEST['tipo_usu']=='empr'){
		require_once('../class/empresa.php');
		$obj_empr = new Classempresa();
		$usuario = $obj_empr->findEmpresaById($_REQUEST['id_usua']);
	}else{
		require_once('../class/empleado.php');
		$obj_empl = new Classempleado();
		$usuario = $obj_empl->findusuarioById($_REQUEST['id_usua']);
	}
?>
<!--Google Maps-->
<?php if($usuario[0]['latitud']==''){
		$val_latitud = '4.6210308444794235';
		$val_longitud = '-74.07291412353516';
		$val_titulo = '';
		$enable = '';
	}else{
		$val_latitud = $usuario[0]['latitud'];
		$val_longitud = $usuario[0]['longitud'];
		if($_REQUEST['tipo_usu']=='empr'){
			$val_titulo = $usuario[0]['raz_soc_emp']." - ".$usuario[0]['direccion'];;
		}else{
			$val_titulo = $usuario[0]['nom_empl']." ".$usuario[0]['apel_empl']." - ".$usuario[0]['direccion'];
		}
		$enable = 'readonly';
	}
	
?>
<input type="hidden" name="val_titulo" id="val_titulo" value="<?= $val_titulo?>" /> 
<input type="hidden" name="latitud" id="latitud" value="<?= $val_latitud?>" /> 
<input type="hidden" name="longitud" id="longitud" value="<?= $val_longitud?>" /><br/><br/>
<?php require_once('../google/funciones_google.php'); ?>
<!--fin Google Maps-->	

<?php 
}



if($_REQUEST['ac']=="ruta"){

		require_once('../class/empresa.php');
		require_once('../class/empleado.php');

		$obj_empr = new Classempresa();
		$empresa = $obj_empr->findEmpresaById($_REQUEST['id_empresa']);
		
		$obj_empl = new Classempleado();
		$usuario = $obj_empl->findusuarioById($_REQUEST['id_empleado']);

		//print_r($usuario);die();
	
?>
<!--Google Maps-->
<?php if($empresa[0]['latitud']==''){
		$val_latitud_empresa = '4.6210308444794235';
		$val_longitud_empresa = '-74.07291412353516';
		$val_titulo_empresa = '';
		}else{
		$val_latitud_empresa = $empresa[0]['latitud'];
		$val_longitud_empresa = $empresa[0]['longitud'];
		$val_titulo_empresa = $empresa[0]['raz_soc_emp']." - ".$empresa[0]['direccion'];		
	}

	if($usuario[0]['latitud']==''){
		$val_latitud_usuario = '4.6210308444794235';
		$val_longitud_usuario = '-74.07291412353516';
		$val_titulo_usuario = '';
	}else{
		$val_latitud_usuario = $usuario[0]['latitud'];
		$val_longitud_usuario = $usuario[0]['longitud'];
		$val_titulo_usuario = $usuario[0]['nom_empl']." ".$usuario[0]['apel_empl']." - ".$usuario[0]['direccion'];
		
	}
	
?>
<input type="hidden" name="val_titulo_empresa" id="val_titulo_empresa" value="<?= $val_titulo_empresa?>" /> 
<input type="hidden" name="val_titulo_usuario" id="val_titulo_usuario" value="<?= $val_titulo_usuario?>" /> 
<input type="hidden" name="latitud_empresa" id="latitud_empresa" value="<?= $val_latitud_empresa?>" /> 
<input type="hidden" name="longitud_empresa" id="longitud_empresa" value="<?= $val_longitud_empresa?>" />
<input type="hidden" name="latitud_usuario" id="latitud_usuario" value="<?= $val_latitud_usuario?>" /> 
<input type="hidden" name="longitud_usuario" id="longitud_usuario" value="<?= $val_longitud_usuario?>" /><br/><br/>
<?php require_once('../google/ruta_google.php'); ?>
<!--fin Google Maps-->	

<?php 
}

?>
