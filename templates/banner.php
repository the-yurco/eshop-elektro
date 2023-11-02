<div class="banner">
	<div class="container">
			<div class="banner-bottom">
					<div class="banner-bottom-left">
							<h2>N<br>A<br>K<br>U<br>P</h2>
					</div>
					<div class="banner-bottom-right">
							<div class="callbacks_container">
									<ul class="rslides" id="slider4">
											<li>
													<div class="banner-info">
															<h3>Chytrý a přesto neformální</h3>
															<p>Začněte nakupovat zde...</p>
													</div>
											</li>
											<li>
													<div class="banner-info">
															<h3>Nakupujte online</h3>
															<p>Začněte nakupovat zde...</p>
													</div>
											</li>
											<li>
													<div class="banner-info">
															<h3>Seberte si svou tašku</h3>
															<p>Začněte nakupovat zde...</p>
													</div>								
											</li>
									</ul>
							</div>
							<script src="js/responsiveslides.min.js"></script>
							<script>
									$(function () {
											$("#slider4").responsiveSlides({
													auto: true,
													pager: true,
													nav: false,
													speed: 500,
													namespace: "callbacks",
													before: function () {
															$('.events').append("<li>Událost před zahájením.</li>");
													},
													after: function () {
															$('.events').append("<li>Událost po dokončení.</li>");
													}
											});
									});
							</script>
					</div>
					<div class="clearfix"> </div>
			</div>
			<div class="shop">
					<a href="single.php">NÁKUP KOLEKCE NYNÍ</a>
			</div>
	</div>
</div>
