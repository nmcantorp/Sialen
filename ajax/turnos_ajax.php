<?php 

require_once('../class/turnos.php');
$obj_turnos = new Classturnos();
if($_REQUEST['ac']=="emp"){

	$inicial = $_REQUEST['fech_ini'];
	$final = $_REQUEST['fech_fin'];

	$inicial = str_replace('/','-',$inicial);
	$final = str_replace('/','-',$final);

	$data = array();

	$data['fecha_inicial'] = $inicial;
	$data['fecha_final'] = $final;



	$empresas = $obj_turnos->EmpresaSinAsignar($data);
	//print_r($empresas);die();
?>
<strong>Empresas que en el rango de fechas no se ha asignado Trabajador</strong>
<p><select id='sel_empresa' name='sel_empresa' onchange="carga_mapa(this)" required>
	<option value="">- Empresas -</option>
  	<!-- <option value="11001">BOGOTA</option> -->
  	<?php for ($i=0; $i < count($empresas); $i++) { ?>
  	
  	<option value="<?= $empresas[$i]['id_empr']?>"><?php echo utf8_encode($empresas[$i]['raz_soc_emp']) ?></option>
  	
  <?php	} ?>
</select></p>
<?php 
}

if($_REQUEST['ac']=='empresa'){
	require_once('../class/empresa.php');
	$obj_empresa = new Classempresa();

	$datos = $obj_empresa->findEmpresaById($_REQUEST['id_usuario'], "empresa.id_empr");
	$_SESSION['latitud_empresa'] = $datos[0]['latitud'];
	$_SESSION['longitud_empresa'] = $datos[0]['longitud'];

	$datos_carcanos = $obj_turnos->personas_cercania($datos[0]['id_empr']);//print_r($datos_carcanos);die();
	/*$_SESSION['id_empleado'] = $datos_carcanos[0]['usuario_id_usua'];
	$_SESSION['nombre'] = $datos_carcanos[0]['nom_empl'];
	$_SESSION['apellido'] = $datos_carcanos[0]['apel_empl'];*/
	$datos_carcanos['latitud_empresa'] = $datos[0]['latitud'];
	$datos_carcanos['longitud_empresa'] = $datos[0]['longitud'];//echo count($datos_carcanos);die();
	$datos_carcanos['total'] = count($datos_carcanos);

	$_SESSION['datos']=json_encode($datos_carcanos);

}

if($_REQUEST['ac']=='jornada'){
	$num_personas = $obj_turnos->turno_empresa($_REQUEST['id_empresa'], $_REQUEST['jornada']);
	$datos = json_decode($_SESSION['datos'], true);
	$turnos_x_jornada = $obj_turnos->get_turnos_by_company($_REQUEST['id_empresa'], null, null, $_REQUEST['jornada']);
	//print_r($turnos_x_jornada);
	for ($i=0; $i < $num_personas[0]['num_pers_tur']; $i++) { 
		//echo "aca 1";
		?> 
		<div id="vigilante_asig">
			
		<div> Vigilante Nº 
		<?php echo $i+1;
		echo "<select id='vigitante_".$i."' name='vigilante_".$i."' required>";
		echo "<option value=''>Selecciones Vigilante</option>";		
		for ($j=0; $j < count($datos)-3; $j++) { 
			echo "<option value='". $datos[$j]['usuario_id_usua'] ."'>". $datos[$j]['nom_empl']." ". $datos[$j]['apel_empl'] ."</option>";		
		}
		echo "</select></div>";

		?> 
		<div> Turno 
		<?php echo $i+1;
		echo "<select id='turno_".$i."' name='turno_".$i."' required>";
		echo "<option value=''>Selecciones Vigilante</option>";		
		for ($j=0; $j < count($turnos_x_jornada); $j++) { 
			echo "<option value='". $turnos_x_jornada[$j]['id_tur_emp'] ."'>". $turnos_x_jornada[$j]['hor_ini_tur']." - ". $turnos_x_jornada[$j]['hor_fin_tur'] ."</option>";		
		}
		echo "</select></div>";
		echo "</div>";

	}
	echo "<div><input type='hidden' name='total_usu' id='total_usu' value='".$i."'></div>";

	?> 
		<div class="reg_datos" id="div_submit"><input type="submit" value="Guardar" id="enviar" ></div>
	<?php
}



?>