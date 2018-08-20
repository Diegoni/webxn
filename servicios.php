<?php 
include_once('head.php');
echo getMenu(2, $lenguage);
?>
<link rel="stylesheet" type="text/css" href="librerias/HoverEffect/css/set1.css" />
<div class="w3layouts-banner-slider-1"></div>	

<!-- services -->
	<div class="courses">
		<div class="container"> 	
			<div class="w3ls-title"> 
				<h3 class="agileits-title w3title1"><?php echo $lenguage['soluciones'] ?></h3>
				<p class="top-p"><?php echo $lenguage['soluciones_desc'] ?></p>
			</div>
			<div class="agileinfo_services_grids">
				<div class="col-md-6 w3_agile_services_grid">
					<div class="agile_services_grid1 wthree_services_grid1">
						<h3><?php echo $lenguage['actualizacion']?></h3>
						<div class="agile_services_grid1_sub">
							<p><?php echo $lenguage['julio_2018']?></p>
						</div>
						
					</div>
					<div class="agileits_w3layouts_services_grid1">
						<h4>
							<a href="sitar.php"><?php echo $lenguage['sitar']?></a></h4>
						<p><?php echo $lenguage['sitar_desc']?></p>
					</div>
				</div>
				<div class="col-md-6 w3_agile_services_grid">
					<div class="agile_services_grid1 wthree_services_grid2">
						<h3><?php echo $lenguage['actualizacion']?></h3>
						<div class="agile_services_grid1_sub">
							<p><?php echo $lenguage['julio_2018']?></p>
						</div>
						
					</div>
					<div class="agileits_w3layouts_services_grid1">
						<h4>
							<a href="xn-online.php"><?php echo $lenguage['xn_online']?></a></h4>
						<p><?php echo $lenguage['xn_online_desc']?></p>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
			
			<div class="container"> 	
		
			<div class="agileinfo_services_grids">
				<div class="col-md-6 w3_agile_services_grid">
					<div class="agile_services_grid1 wthree_services_grid3">
						<h3><?php echo $lenguage['actualizacion']?></h3>
						<div class="agile_services_grid1_sub">
							<p><?php echo $lenguage['julio_2018']?></p>
						</div>
						
					</div>
					<div class="agileits_w3layouts_services_grid1">
						<h4>
							<a href="xn-24.php"><?php echo $lenguage['xn_24']?></a></h4>
						<p><?php echo $lenguage['xn_24_desc']?></p>
					</div>
				</div>
				<div class="col-md-6 w3_agile_services_grid">
					<div class="agile_services_grid1 wthree_services_grid4">
						<h3><?php echo $lenguage['actualizacion']?></h3>
						<div class="agile_services_grid1_sub">
							<p><?php echo $lenguage['julio_2018']?></p>
						</div>
						
					</div>
					<div class="agileits_w3layouts_services_grid1">
						<h4>
							<a href="sitar.php"><?php echo $lenguage['e_facturacion']?></a></h4>
						<p><?php echo $lenguage['e_facturacion_desc']?></p>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>



	<div class="services-bottom">
		<div class="container"> 
			<div class="agileits_services_bottom_grid wow fadeInUp animated">
				<h3><?php echo $lenguage['asesoramiento']?></h3>
				<p><?php echo $lenguage['asesoramiento_desc']?></p>
			</div>
		</div>
	</div>
<!-- //services-bottom -->

<!-- services1 -->
	<div class="courses">
		<div class="container"> 	
			<div class="w3ls-title wow fadeInDown animated"> 
				<h3 class="agileits-title w3title1"><?php echo $lenguage['transaccionales']?></h3>
				<p class="top-p"><?php echo $lenguage['transaccionales_desc']?></p>
			</div>
		</div>
	</div>

<?php include_once('footer.php')  ?>


<script src="js/responsiveslides.min.js"></script>
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
<script type="text/javascript">
$(document).ready(function() {
	$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
</body>
</html>