
<script>
	jQuery(document).ready(function($) {
		$('#facebook').hover(function() {
			$(this).animate({left: '+=150'},'slow');
		}, function() {
			$(this).animate({left: '-=150'},'slow');
		});	
	});
</script>
<!-- Ingreso Redes Sociales -->

<div id='facebook'>
	<a href="../facebook/login_fb.php" target="_blank" onclick="window.open(this.href,this.target,'width=1000,height=600,top=200,left=100,toolbar=no,location=no,status=no,menubar=no');return false;">Registrarse</a>	
	<img src="../images/icon/facebook7.png" alt="" />
</div>
<!-- Fin Redes Sociales -->