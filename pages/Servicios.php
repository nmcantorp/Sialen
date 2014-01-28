<?php require_once('../comunes/cabezote_int.php'); 
require_once('../comunes/redes_sociales.php');
require_once('../class/servicios.php');

$objServicio = new ClassServicio();

$resultServicio = $objServicio->get_Servicios();

?>

<script>
	function expandir(id){
		//alert('#text'+id.id);
		if($('#text'+id.id).is(':visible') ){
			$('#text'+id.id).hide('slow');
			$('.estilo3 img#'+id.id).attr('src','../images/icon/favicon2.ico');
		}else{
			$('#text'+id.id).show('slow');
			$('.estilo3 img#'+id.id).attr('src','../images/icon/favicon3.ico');
		}
	}

</script>


<div class="estilo" id="div_center" style="display: block !important;">
	<h2 id="Sub_title">Nuestros Servicios</h2>

	<?php for ($i=0; $i < count($resultServicio); $i++): ?>
		<div class="estilo3">
		<h4><?php echo $resultServicio[$i]['tit_serv'] ?></h4><img id="<?= $i ?>" src="../images/icon/favicon2.ico" onclick="javascript:expandir(this)">
		<p id="text<?= $i ?>"><?php echo $resultServicio[$i]['det_serv'] ?>	</p>
	</div>
		

	<?php endfor; ?>
		
</div>

<?php require_once('../comunes/pie_int.php'); ?>