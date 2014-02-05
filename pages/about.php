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
      <h2>Nuestra filosof&iacute;a</h2>
      <p>
      Estamos comprometidos en brindarle productos y servicios de calidad, enfoc&aacute;ndonos en proveer soluciones eficaces a la medida de sus necesidades, &nbsp;teniendo presente que la puntualidad y el cumplimiento de los tiempos de desarrollo pactados con nuestros clientes , son de crucial importancia para el crecimiento de nuestras alianzas y de sus intereses empresariales, tenemos como filosof&iacute;a mantener una relaci&oacute;n profesional &nbsp;que le genere valor a su organizaci&oacute;n y soluci&oacute;n a sus necesidades.</p>
    </section>
  </div>
  <!-- end one-third column ends here -->
  <div class="one_third">
    <section class="aboutonecenter">
      <h2>Nuestra Motivación</h2>
      <p>Nuestra motivación es generada por las necesidades de las empresas, para recibir productos de calidad, en lo que respecta a la prestación de servicios orientados a la creación, mantenimiento y renovación de sus sitios web, de forma que se pueda entregar un completo servicio de hosting, almacenamiento de bases de datos, programación de aplicativos web y soporte técnico para equipos informáticos, con costos asequibles, resultados óptimos y de calidad, acordes a los requerimientos y solicitudes de nuestros clientes.</p>
      <!-- <img class="raster" src="../images/raster.png" alt=""/>
      <p class="quote">Etiam eget mi enim, non ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem.</p> -->
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