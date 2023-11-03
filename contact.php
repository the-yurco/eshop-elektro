<!DOCTYPE html>
<html>

<head>
	<title>Eshop - Responzívna webová šablóna Bootstrap E-Commerce | Kontakt :: w3layouts</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (potrebné pre JavaScriptové pluginy Bootstrap) -->
	<script src="js/jquery.min.js"></script>
	<!-- Vlastné súbory šablóny -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Vlastné súbory šablóny -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Eshop Responzívna web šablóna, Bootstrap Web šablóny, Ploché Web šablóny, Android kompatibilné web šablóny, 
	Smartphone kompatibilné web šablóny, bezplatné webdesigny pre Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--webfont-->
	<!-- pre správne fungovanie Bootstrapu -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //pre správne fungovanie Bootstrapu -->
	<!-- košík -->
	<script src="js/simpleCart.min.js"> </script>
	<!-- košík -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>

<body>
	<!-- sekcia hlavička začína -->
	<?php include('templates/header.php'); ?>

	<!-- kontaktná stránka -->
	<div class="contact">
		<div class="container">
			<div class="dreamcrub">
				<ul class="breadcrumbs">
					<li class="home">
						<a href="index.html" title="Prejsť na domovskú stránku">Domov</a>&nbsp;
						<span>&gt;</span>
					</li>
					<li class="women">
						Kontakt
					</li>
				</ul>
				<ul class="previous">
					<li><a href="index.html">Späť na predchádzajúcu stránku</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="contact-info">
				<h2>NÁJDITE NÁS TU</h2>
			</div>
			<div class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" style="border:0"></iframe>
			</div>
			<div class="contact-form">
				<div class="contact-info">
					<h3>KONTAKTNÝ FORMULÁR</h3>
				</div>
				<form>
					<div class="contact-left">
						<input type="text" placeholder="Meno" required>
						<input type="text" placeholder="E-mail" required>
						<input type="text" placeholder="Predmet" required>
					</div>
					<div class="contact-right">
						<textarea placeholder="Správa" required></textarea>
					</div>
					<div class="clearfix"></div>
					<input type="submit" value="ODOSLAŤ">
				</form>
			</div>
		</div>
	</div>
	<!-- //kontaktná stránka -->

	<footer class="footer">
		<div class="footer-middle">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="index.html"><img src="images/log.png" alt=""></a>
						<p class=" text-center">&copy; 2023 Elektro E-shop. Všetky práva vyhradené</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>