<?php require_once('../comunes/cabezote_int.php');
  require_once('../class/servicios.php');

  $objServicios = new ClassServicio();

  $resServicios = $objServicios->get_Servicios();

 ?>

<!-- About Content Part - Box One ==================================================
================================================== -->
<div class="blankSeparator"></div>
<div class="container">
  <div class="one_third">
    <section class="aboutoneleft">
      <h2>Our Phylosophy</h2>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      <img class="raster" src="images/raster.png" alt=""/>
      <p class="quote">Etiam eget mi enim, non ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem.</p>
    </section>
  </div>
  <!-- end one-third column ends here -->
  <div class="one_third">
    <section class="aboutonecenter">
      <h2>Our Motivation</h2>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      <img class="raster" src="images/raster.png" alt=""/>
      <p class="quote">Etiam eget mi enim, non ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem.</p>
    </section>
  </div>
  <!-- end one-third column ends here -->
  <div class="one_third lastcolumn">
    <section class="aboutoneright">
      <h2>Nuestro Último Desarrollo</h2>
      <img src="../images/about/1.png" alt=""/> </section>
  </div>
  <!-- end one-third column ends here --> 
</div>
<!-- econtainer ends here --> 
<!-- About Content Part - Box Two ==================================================
================================================== -->
<div class="container">
  <div class="sepContainer1"></div>
  <!-- Toggle -->
  <h2>Servicios</h2>
<?php for ($i=0; $i < count($resServicios); $i++): 
  
?>
  <div class="toggle-trigger"><?php echo $resServicios[$i]['tit_serv']; ?></div>
  <div class="toggle-container">
    <p><?php echo $resServicios[$i]['det_serv']; ?></p>
  </div>

<?php endfor; ?>

  <!-- ENDS Toggle --> 
</div>
<div class="blankSeparator1"></div>

<?php require_once('../comunes/pie_int.php'); ?>