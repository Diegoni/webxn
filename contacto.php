<?php 
include_once('head.php');
echo getMenu(4, $lenguage);
?>
<link rel="stylesheet" type="text/css" href="librerias/HoverEffect/css/set1.css" />
<div class="w3layouts-banner-slider-1"></div>	
<!-- /navigation -->

	<!-- contact -->
	<div class="contact">
		<div class="container">   
			<div class="w3ls-title"> 
				<h3 class="agileits-title w3title1"><?php echo $lenguage['contacto']?></h3>
				<p class="top-p"><?php echo $lenguage['contactanos']?></p>
			</div>
			<!-- map --> 
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13400.910727405326!2d-68.835584!3d-32.892148!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x911bb2b4bd377b2!2sX+Nativa+GROUP!5e0!3m2!1ses-419!2sar!4v1529591433428"  allowfullscreen></iframe>
			</div> 
			<!-- //map -->  
			<div class="map-pos">
				<div class="col-md-4 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5><?php echo $lenguage['visitanos']?></h5>
						<p><?php echo $lenguage['direccion']?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 address-row w3-agileits">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5><?php echo $lenguage['email']?></h5>
						<p><a href="mailto:<?php echo $lenguage['correo']?>"> <?php echo $lenguage['correo']?></a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5><?php echo $lenguage['telefono']?></h5>
						<p><?php echo $lenguage['nro_tel']?></p>
					</div>
					<div class="clearfix"> </div>
				</div>  
				<div class="clearfix"> </div>
			</div>  
			<form action="#" method="post">
				<div class="col-sm-6 contact-left">
					<input type="text" name="nombre" placeholder="<?php echo $lenguage['nombre']?>" required="">
					<input type="email" name="email" placeholder="<?php echo $lenguage['email']?>" required="">
					<input type="text" name="telefono" placeholder="<?php echo $lenguage['telefono']?>" required="">
				</div>
				<div class="col-sm-6 contact-right"> 
					<textarea name="mensaje" placeholder="<?php echo $lenguage['mensaje']?>" required=""></textarea>
					<input type="submit" value="<?php echo $lenguage['enviar']?>" >
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>  
	<!-- //contact -->  

	<?php include_once 'footer.php'; ?>
	<!-- //footer end here -->   
	<script src="js/responsiveslides.min.js"></script>
		<!-- start-smooth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			</script>
	<!-- //start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
</body>
</html>