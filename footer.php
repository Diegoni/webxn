<!-- footer start here --> 
	<div class="footer-agile jarallax">
		<div class="container">
			
			<div class="footer-btm-agileinfo wow slideInRight animated">
				<div class="col-md-3 col-xs-3 footer-grid">
					<h3>Navegación</h3> 
					<ul>
						<li><a href="index.html">Quienes somos</a></li>
						<li><a href="services.html">Soluciones avanzadas</a></li> 
						<li><a href="projects.html">Mercados</a></li> 
						<li><a href="contact.html">Contacto</a></li> 
					</ul> 
				</div> 
				<div class="col-md-3 col-xs-3 footer-grid w3social">
					<h3>Soluciones</h3>
					<ul>
						<li><a href="services.html"><i class="glyphicon glyphicon-menu-right"></i>E Facturación</a></li>
						<li><a href="services.html"><i class="glyphicon glyphicon-menu-right"></i>E Comprobantes</a></li>
						<li><a href="services.html"><i class="glyphicon glyphicon-menu-right"></i>E Pay</a></li>
						<li><a href="services.html"><i class="glyphicon glyphicon-menu-right"></i>E Recargas</a></li>
					</ul>					
				</div> 
				<div class="col-md-6 col-xs-6 footer-grid footer-review">
					<h3>Contacto</h3>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Tu Email" required="">
						<input type="submit" value="Enviar"> 
						<div class="clearfix"> </div>
					</form> 
					<div class="copy-w3lsright"> 
						<p>© 2018 X Nativa.</p>
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