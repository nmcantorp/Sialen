<?php 

require_once('../class/ciudad.php');
$obj_ciudad = new Classciudad();
if($_REQUEST['ac']=="localidad"){

$localidad = $obj_ciudad->getLocalidad($_REQUEST['ciudad']);
?>
<div class="reg_datos">Localidad: <select id='sel_localidad' name='sel_localidad' onchange="javascript:ver_Barrio(this)" required>
	<option value="">- Localidad -</option>
  	<!-- <option value="11001">BOGOTA</option> -->
  	<?php for ($i=0; $i < count($localidad); $i++) { ?>
  	
  	<option value="<?= $localidad[$i]['id_loc']?>"><?php echo utf8_encode($localidad[$i]['nom_loc']) ?></option>
  	
  <?php	} ?>
</select></div>
<?php 
}

if($_REQUEST['ac']=="barrio"){

$Barrio = $obj_ciudad->getBarrio($_REQUEST['localidad']);
?>
<div class="reg_datos">Barrio: 
  <select id='sel_barrio' name='sel_barrio' onchange="javascript:ver_ubicacion(this)" required>
	<option value="" >- Barrio -</option>
  	<!-- <option value="11001">BOGOTA</option> -->
  	<?php for ($i=0; $i < count($Barrio); $i++) { ?>
  	
  	<option value="<?= $Barrio[$i]['id_barrio']?>"><?php echo utf8_encode($Barrio[$i]['nom_barrio']) ?></option>
  	
  <?php	} ?>
</select>
</div>
<?php 
}


?>