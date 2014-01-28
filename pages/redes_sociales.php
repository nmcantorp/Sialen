	<script>
	$(document).ready(function() {
		$('#div_link ul.socials li a#img_twitter').click(function(){

			if($('.div_twitter').css('bottom') == '20px'){
				$('.div_twitter').css('bottom', '-200%');
			}else{
				$('.div_twitter').css('bottom', '20px');
				$('.facebook').css('bottom', '-200%');
			}
		});

		$('#div_link ul.socials li a#img_facebook').click(function(){
			if($('.facebook').css('bottom') == '6px'){
				$('.facebook').css('bottom', '-200%');
			}else{
				$('.facebook').css('bottom', '6px');
				$('.div_twitter').css('bottom', '-200%');
			}
		});

		$('.div_twitter').mouseout(function(){
			$(this).css('bottom', '-200%');
		});

		$('.facebook').mouseout(function() {
			$(this).css('bottom', '-200%');
		});

		$('.facebook').mouseout(function() {
			$(this).css('bottom', '-200%');
		});

	});
	</script>
	<?php 	$val_url = $_SERVER['REQUEST_URI'];
		    $value_url = explode('/', $val_url);
		    $val_count = 3;
		    if($value_url[1]==='sialen') $val_count = 4;

		    if (count($value_url)>=$val_count) {
		    	$sep_rut = '../';
		    }else{
		    	$sep_rut = '';
		    }

	 ?>
	<div id="div_link">
		Redes Sociales
		<ul class="socials fr" style="text-align:center; float:none !important;">
            <li><a href="javascript:void(0)" id="img_twitter"><img src="<?= $sep_rut ?>images/socials/twitter.png" class="poshytip" title="Twitter"  alt="" /></a></li>
            <li><a href="javascript:void(0)" id="img_facebook"><img src="<?= $sep_rut ?>images/socials/facebook.png" class="poshytip" title="Facebook" alt="" /></a></li>
            <!-- <li><a href="#"><img src="images/socials/google.png" class="poshytip" title="Google" alt="" /></a></li>
            <li><a href="#"><img src="images/socials/dribbble.png" class="poshytip" title="Dribbble" alt="" /></a></li> -->
          </ul>
	</div>




	<div class="div_twitter red_social_prin">
      <h3>Ultimos Tweets</h3>
      <div id="tweets">
        <a class="twitter-timeline"  href="https://twitter.com/sialeningeniero"  data-widget-id="345340195895377920">Tweets por @sialeningeniero</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
     	
      </div>
    </div>


    <div class="facebook red_social_prin">
      <h3>Facebook</h3>

      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=452770731490324";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      <div class="fb-like-box" data-href="https://www.facebook.com/SialenIngenieros" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false" data-share="true"></div>
      

      <div id="fb-root" style="z-index:1"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=452770731490324";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-share-button" data-href="https://www.facebook.com/SialenIngenieros" data-type="button_count"></div>

</div>