<!-- banner-->
<div class="w3layouts-banner-slider">
	<div class="container">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="top-agileits-banner">
							<div class="agileits-banner-info">
								<h3><?php echo $lenguage['soluciones']?></h3>
							</div>
							<div class="agileinfo-social-grids">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-rss"></i></a>
								<a href="#"><i class="fa fa-vk"></i></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<div class="top-agileits-banner">
							<div class="agileits-banner-info">
								<h3><?php echo $lenguage['servicios']	?></h3>
							</div>
							<div class="agileinfo-social-grids">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-rss"></i></a>
								<a href="#"><i class="fa fa-vk"></i></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<div class="top-agileits-banner">
							<div class="agileits-banner-info">
								<h3><?php echo $lenguage['tecnologia']	?></h3>
							</div>
							<div class="agileinfo-social-grids">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-rss"></i></a>
								<a href="#"><i class="fa fa-vk"></i></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<div class="top-agileits-banner">
							<div class="agileits-banner-info">
								<h3><?php echo $lenguage['integracion']	?></h3>
							</div>
							<div class="agileinfo-social-grids">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-rss"></i></a>
								<a href="#"><i class="fa fa-vk"></i></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<script>
				// You can also use "$(window).load(function() {"
				$(function () {
				// Slideshow 4
					$("#slider4").responsiveSlides({
						auto: true,
						pager:true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
							$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});
				});
			</script>
			<!--banner Slider starts Here-->
		</div>
	</div>
</div>
<!-- //banner -->