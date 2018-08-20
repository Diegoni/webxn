<?php 
include_once('head.php');
echo getMenu(2, $lenguage);
?>
<link rel="stylesheet" type="text/css" href="librerias/HoverEffect/css/set1.css" />
<div class="w3layouts-banner-slider-1"></div>	

<div class="welcome">
	<div class="container">
		<div class="agileits-title wow fadeInUp animated">
			<h3 class="agileits-title w3title1"><?php echo $lenguage['xn_online'] ?></h3>
			<p class="top-p"><?php echo $lenguage['xno_desc'] ?></p>
		</div> 
		<div class="w3ls-row wow slideInRight animated">
			<div class="col-md-6 ">
				<img src="images/about.jpg" class="img-responsive" alt=""/>
			</div>
			<div class="col-md-6 ">
				<div class="welcome-agiletext" style="padding: 0em 3em; ">
					<h4> <?php echo $lenguage['descripcion_servicio'] ?> </h4>
					<p style="font-size: 15px;"><?php echo $lenguage['xno_ext'] ?></p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>


<div class="welcome">
	<div class="container">
		<div class="w3ls-row ">
			<div class="col-md-6 wow slideInLeft animated">
				<div class="welcome-agiletext" style="padding: 1em 3em;">
					<h4> <?php echo $lenguage['proceso_conciliacion'] ?> </h4>
					<p style="font-size: 15px;"><?php echo $lenguage['xno_conc'] ?></p>
				
				</div>
			</div>
			<div class="col-md-6 wow slideInRight animated">
				<div class="welcome-agiletext" style="padding: 1em 3em;">
					<h4> <?php echo $lenguage['principales_prestaciones'] ?> </h4>
					<p><?php echo $lenguage['xno_pres'] ?></p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>


<center>
	<h5><?php echo $lenguage['descargar_enlase']?></h5>
	<a href="pdf/XNETONLINE01PresentacionGeneral.pdf" data-toggle="modal" class="more"><?php echo $lenguage['descargar']?></a>
</center>
<br>

<?php include_once('footer.php');?>