<?php

	require('connect_bdd.php');

?>

<!DOCTYPE html>
 <html lang="en">

 <head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="public/img/pharmacie_icone-1.png">
	<link rel="icon" type="image/png" href="public/img/pharmacie_icone-1.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		Tongasoa | Pharmacetica
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- CSS Files -->
	<link href="public/css/material-kit.css?v=2.0.5" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="public/css/demo.css" rel="stylesheet" />
	<script src="public/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
 </head>

 <style>
	 body{
		 font-family: Poppins !important;
	 }

 </style>

 <body class="index-page sidebar-collapse">

		<div class="main main-raised">
		<div class="section section-basic">
			<div class="container">




		</div>
		<div class="section section-navbars cd-section" id="navigation">
			<div class="container">


			<div class="title">
			<h3 style="font-family: Poppins !important;">Fitantanana Fivarotam-panafody </h3>
			</div>
			</div>
			<!--             navbar -->
			<div id="navbar">
			<div class="navigation-example" style="background-image: url('public/img/bg.jpg');">
			<!--        rose navbar with search form -->
			<nav class="navbar navbar-expand-lg bg-rose">
				<div class="container">
				<div class="navbar-translate">
				<button class="navbar-toggler"  type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="sr-only">Toggle navigation</span>
						<span class="navbar-toggler-icon"></span>
						<span class="navbar-toggler-icon"></span>
						<span class="navbar-toggler-icon"></span>
				</button>
				</div>
				<div class="collapse navbar-collapse" id="cola">
				<ul class="navbar-nav">
					<li class="nav-item active">
					<a href="admin.php" class="" style="color:#fff" > Mpandrindra</a>
					</li>
					<li class="nav-item">
					<a href="formulaire.php" class="" style="color:#fff; margin-left:60px !important;"> Hamandrika fanafody </a>
					</li>
				</ul>



				<!-- Champ fitadiavana fanafody--------------------------------------------------------------------------------------------------- -->
				<form class="form-inline ml-auto">
					<div class="form-group has-white">
						<input type="text" id="champ_recherche"  class="form-control" name="fanaf_recherche" placeholder="Anarana fanafody">
					</div>
					<button type="button" onclick=rechercheo($('#champ_recherche').val()) name="btnmitad"  class="btn btn-white btn-raised btn-fab btn-round">
						<i class="fa fa-search" style="color: #e91e93 !important;"> </i>
					</button>
				</form>



				</div>

				</div>
			</nav>

		<!--         carousel  -->
			<div class="section" id="carousel">
			<div class="container">
				<div class="row">
				<div class="col-md-8 mr-auto ml-auto">
				<!-- Carousel Card -->
				<div class="card card-raised card-carousel">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
					<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
					</ol>
					<div class="carousel-inner" style= "height: 400px !important;">
					<div class="carousel-item active">
						<img class="d-block w-50" style= "margin-top: 85px !important;" src="public/img/paracetamol.png" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
						<h4>
						<i class="material-icons"></i>
						</h4>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-50" src="public/img/doliprane.jpeg" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
						<h4>
						<i class="material-icons"></i>
						</h4>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-50" src="public/img/brufen.jpg" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
						<h4>
						<i class="material-icons"></i>
						</h4>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-50" src="public/img/ibuprofene.jpeg" alt="Fourth slide">
						<div class="carousel-caption d-none d-md-block">
						<h4>
							<i class="material-icons"></i>
						</h4>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-50" src="public/img/spos.jpg" alt="Fourth slide">
						<div class="carousel-caption d-none d-md-block">
						<h4>
							<i class="material-icons"></i>
						</h4>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-50" src="public/img/advil.jpg" alt="Fourth slide">
						<div class="carousel-caption d-none d-md-block">
						<h4>
							<i class="material-icons"></i>
						</h4>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-50" src="public/img/paradic.jpeg" alt="Fifth slide">
						<div class="carousel-caption d-none d-md-block">
							<h4>
							<i class="material-icons">
							</h4>
						</div>
					</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<i class="material-icons" ></i>
						<span class="sr-only" >Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<i class="material-icons"></i>
						<span class="sr-only">Next</span>
					</a>
					</div>
				</div>
				<!-- End Carousel Card -->
				</div>
				</div>
			</div>
			</div>
			<!--         end carousel -->

		</div>
		</div>




		<!-- Voka-pikaraohampanafody--------------------------------------------------------------------------------------------------------------------- -->
		<div id="modalvaliny" class="modal fade">
			<div class="modal-dialog" style="width:27%";>
				<div class="modal-content">
					<form>
						<div class="modal-header"  style="padding-left:5% !important;">
							<button  id="vokany" style="font-style:normal !important; padding-top:-2%; font-size: 20px !important; margin-left:2%; border-radius:5px; border:none !important; width:100%; background-image: linear-gradient(to bottom, #e91e63, #640f91);"></button>
							<a><button  style="font-style:normal !important; padding-left:9px; padding-right:8px; font-size: 15px !important; margin-left:2%; border-radius:12px; border:none !important; background-image: linear-gradient(to bottom, #e91e63, #640f91); color:#fff;">x</button>
						</div>
					</form>
				</div>
			</div>
		</div>




		<footer class="footer" data-background-color="black">
		<div class="container">
			<div class="copyright float-right">
			&copy;
			<script>
			document.write(new Date().getFullYear())
			</script>, F-Society 2019

			</div>
		</div>
		</footer>

		<!--   Core JS Files   -->
		<script src="public/js/core/jquery.min.js" type="text/javascript"></script>
		<script src="public/js/core/popper.min.js" type="text/javascript"></script>
		<script src="public/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
		<script src="public/js/plugins/moment.min.js"></script>
		<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
		<script src="public/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
		<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
		<script src="public/js/plugins/nouislider.min.js" type="text/javascript"></script>
		<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->

		<script src="tableau.js" type="text/javascript"></script>
		<script>
		$(document).ready(function() {
			//init DateTimePickers
			materialKit.initFormExtendedDatetimepickers();

			// Sliders Init
			materialKit.initSliders();
		});


		function scrollToDownload() {
			if ($('.section-download').length != 0) {
			$("html, body").animate({
			scrollTop: $('.section-download').offset().top
			}, 1000);
			}
		}

		</script>
 </body>

 </html>
