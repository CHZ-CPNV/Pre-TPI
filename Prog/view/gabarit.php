
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CPA &mdash; Abris suisse</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Contrôle des abris anti-atomique" />
	<meta name="keywords" content="CPA, protection civile, CP, abris PC, abris nucléaire, abris antiatomique." />
	<meta name="author" content="Free HTML5 Template by FREEHTML5.CO" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700|Roboto:300,400' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/hamburger.css">
	<link rel="stylesheet" href="css/GoogleMaps.css">


	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
	<body>
	<div class="box-wrap">
		<header role="banner" id="fh5co-header">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="fh5co-navbar-brand">
							<a class="fh5co-logo" href="#"><img class="testImg" src="images/Logo_civil.png" alt="Logo protection civil"></a>
						</div>
					</div>
					<div class="col-md-6">
						<ul class="nav text-center">
							<li class="active"><a href="#"><span>Contrôle périodique des abris anti-atomique suisse</span></a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<div id="container">
						  <div id="burger">
			          <div class="bun top"></div>
			          <div class="filling"></div>
			          <div class="bun bottom"></div>
						  </div>
						</div>
						<nav class="hide">
						  <ul>
						    <li><select><option>Régions</option></select></li>
						    <li class="yellow"><a href="#">Commune:</a><select><option>Commune</option></select></li>
						    <li class="purple"> <a href="index.php?action=editAbris">Modifier un abris</a></li>
						    <li class="green"><a href="index.php?action=publipostage">Publipostage</a></li>
						    <li class="red"><a href="#">Supprimer un abris</a></li>
						  </ul>
						</nav>
					</div>
				</div>
		  </div>
		</header>

		<!-- END: header -->
	  <!--CONTENU ICI....................................................................................-->
	  <?= $content ?>
	  <!--FIN CONTENU....................................................................................-->

		<footer id="footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center ">
						<div class="footer-widget border">
							<p class="pull-left"><small>&copy; Closest Free HTML5. All Rights Reserved.</small></p>
							<p class="pull-right"><small> Designed by  <a href="http://freehtml5.co/" ta>freehtml5.co</a>  Images: <a href="https://unsplash.com/">Unsplash</a></small></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- END: box-wrap -->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
	<script src="js/hamburger.js"></script>
	<script src="js/GoogleMaps.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtWA67DjGBLLYKUY-IE8JBdAg-ibQgzU8&callback=initMap"></script>
	<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
	</body>
</html>
