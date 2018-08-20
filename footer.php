<!-- footer start here --> 
	<div class="footer-agile jarallax">
		<div class="container">
			
			<div class="footer-btm-agileinfo wow slideInRight animated">
				<div class="col-md-3 col-xs-3 footer-grid">
					<h3><?php echo $lenguage['navegacion']	?></h3> 
					<ul>
						<li><a href="index.php"><?php echo $lenguage['quienes_somos']?></a></li>
						<li><a href="servicios.php"><?php echo $lenguage['soluciones']?></a></li> 
						<li><a href="projects.html"><?php echo $lenguage['mercados']?></a></li> 
						<li><a href="contacto.php"><?php echo $lenguage['contacto']?></a></li> 
					</ul> 
				</div> 
				<div class="col-md-3 col-xs-3 footer-grid w3social">
					<h3><?php echo $lenguage['soluciones']?></h3>
					<ul>
						<li><a href="sitar.php"><i class="glyphicon glyphicon-menu-right"></i><?php echo $lenguage['sitar']?></a></li>
						<li><a href="xn-online.php"><i class="glyphicon glyphicon-menu-right"></i><?php echo $lenguage['xn_online']?></a></li>
						<li><a href="xn-24.php"><i class="glyphicon glyphicon-menu-right"></i><?php echo $lenguage['xn_24']?></a></li>
						<!--
						<li><a href="services.html"><i class="glyphicon glyphicon-menu-right"></i>><?php echo $lenguage['xn_24']?></a></li>
						-->
					</ul>					
				</div> 
				<div class="col-md-6 col-xs-6 footer-grid footer-review">
					<h3><?php echo $lenguage['contacto']?></h3>
					<form action="#" method="post">
						<input type="email" name="email" placeholder="<?php echo $lenguage['email']?>" required="">
						<input type="submit" value="<?php echo $lenguage['enviar']?>"> 
						<div class="clearfix"> </div>
					</form> 
					<div class="copy-w3lsright"> 
						<p><?php echo $lenguage['footer_logo']?></p>
					</div> 
				</div> 
				<div class="clearfix"> </div>
			</div>
			<div class="footer-top-agileinfo">  
				<div class="social-wthree-icons bnragile-icons">
					<ul>
						<li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
						<li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
						<li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
						<li><a href="#" class="fa fa-dribbble icon icon-border dribbble"> </a></li> 
					</ul>
					<div class="clearfix"> </div>
				</div>  
			</div>			
		</div>
	</div> 
	
	
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
	
	<script src="librerias/WOW/dist/wow.js"></script>
	<script>
	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
		wow.init();
	</script>
</body>
</html>