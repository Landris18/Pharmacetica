<!DOCTYPE html>
<html lang="en">
 
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="public/img/formulaire_icon.png">
	<link rel="icon" type="image/png" href="public/img/formulaire_icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
	Famandrihana
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="public/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<!-- CSS Files -->
	<link href="public/css/material-kit.css?v=2.0.5" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="public/css/demo.css" rel="stylesheet" />
</head>

 <style>
    body{
      font-family: Poppins !important;
    }
 </style>
 
 <body class="index-page sidebar-collapse">
   
     
     <div class="section section-signup page-header" style="background-image: url('public/img/medicine1.jpeg'); height: 90% !important; ">
       	<div class="container">
         		<div class="row">
           			<div class="col-lg-4 col-md-6 ml-auto mr-auto">
             			<div class="card card-login">
               				<form class="form" method="POST" action="server.php">
                 					<div class="card-header card-header-primary text-center">
                   					<h4 class="">Famandrihana</h4>
                 					</div>
							<p class="description text-center">Ity takelaka ity dia tsy maintsy fenoina tsara.</p>
							<div class="card-body">
							
							<div class="input-group">
								<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="material-icons">account_box</i>
								</span>
								</div>
								<input type="text" class="form-control" name="anar_mp" placeholder="Anaranao">
							</div>
                   
							<div class="input-group">
								<div class="input-group-prepend">
								<span class="input-group-text">
								<i class="material-icons">account_box</i>
								</span>
								</div>
								<input type="text" class="form-control" name="fanar_mp" placeholder="Fanampinanaranao">
							</div>

							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
									<i class="material-icons">room</i>
									</span>
								</div>
								<input type="text" class="form-control" name="adir_mp" placeholder="Adiresy">
							</div>

							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
									<i class="material-icons">call</i>
									</span>
								</div>
								<input type="text" class="form-control" name="find_mp"placeholder="Finday">
							</div>

							<div class="input-group">
								<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="material-icons">add_circle</i>
								</span>
								</div>
								<input type="text" class="form-control" name="anar_fn" placeholder="Anaran'ny fanafody hofandrihina">
							</div>

							<div class="input-group">
								<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="material-icons">add_circle</i>
								</span>
								</div>
								<input type="text" class="form-control" name="isa_fn" placeholder="Isan'ny fanafody hofandrihina">
							</div>
                        
                 					</div>
                 					<div class="footer text-center">
								<button class="btn btn-primary btn-round"  type="submit" style="font-family: Poppins !important;" >
									<i class="material-icons">send</i> Alefa
								</button>
                 					</div>
               				</form>
       				</div>
           			</div>
         		</div>
       	</div>
     	</div>
     
	<footer class="footer" data-background-color="black">
		<div class="container">
			<div class="copyright float-right">
			&copy;
			<script>
			document.write(new Date().getFullYear())
			</script>, edited by Aina Juno.
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
	<!--  Google Maps Plugin    -->
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
	<script src="public/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
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
 