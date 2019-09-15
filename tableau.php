<?php

	//erreur sur l'ajout----------------------------------------------------------------------------------------------------
	require('connect_bdd.php');
	if (isset($_GET['erreur'])){
		if ($_GET['erreur'] == 'true') {
			$erreur = 'Solonanarana na tenimiafina diso';
		}
	}
	//mamafa---------------------------------------------------------------------------------------------------------------
	if (isset($_GET['succes'])){
		if ($_GET['succes'] == 'true') {
			$succes = 'Voafafa tsara ilay fanafody';
			$succesx = 'x';

		}
	}
	//erreur reference----------------------------------------------------------------------------------------------------
	if (isset($_GET['erreur_reference'])){
		if ($_GET['erreur_reference'] == 'true') {
			$err_ref = 'Hamarino tsara ny référence nampidirinao';
		}
	}
	//erreur isa----------------------------------------------------------------------------------------------------------
	if (isset($_GET['erreur_isa'])){
		if ($_GET['erreur_isa'] == 'true') {
			$err_isa = "Hamarino tsara ny isan'ny fanafody nampidirinao";
		}
	}
	//erreur vidy----------------------------------------------------------------------------------------------------------
	if (isset($_GET['erreur_vola'])){
		if ($_GET['erreur_vola'] == 'true') {
			$err_vola = "Hamarino tsara ny vidin'ny fanafody nampidirinao";
		}
	}
	

	//session_start--------------------------------------------------------------------------------------------------------
	session_start();
	if (isset($_SESSION['solonanarana'] )) {
		
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Stock | Pharmacetica</title>
<link rel="icon" type="image/png" href="public/img/pharmacie_icone-1.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="public/css/font-awesome.min.css">
<link rel="stylesheet" href="public/css/bootstrap.min.css">
<link rel="stylesheet" href="public/css/pharmacie.css">
<script src="public/js/jquery.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="tableau.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>

<style>

	.modal-confirm {		
		color: #636363;
		width: 325px;
	}
	.modal-confirm .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-confirm .modal-header {
		border-bottom: none;   
        position: relative;
	}
	.modal-confirm h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -15px;
	}
	.modal-confirm .form-control, .modal-confirm .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-confirm .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}	
	.modal-confirm .modal-footer {
		border: none;
		text-align: center;
		border-radius: 5px;
		font-size: 13px;
	}	
	.modal-confirm .icon-box {
		color: #fff;		
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -70px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #82ce34;
		padding: 15px;
		text-align: center;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.modal-confirm .icon-box i {
		font-size: 58px;
		position: relative;
		top: 3px;
	}
	.modal-confirm.modal-dialog {
		margin-top: 80px;
	}
    .modal-confirm .btn {
        color: #fff;
        border-radius: 4px;
		background: #82ce34;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
	.modal-confirm .btn:hover, .modal-confirm .btn:focus {
		background: #6fb32b;
		outline: none;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}

</style>

</head>

<style>
	body{
		font-family: Poppins !important;
	}

</style>

<body onclick=pageb()>

<!-- Modal HTML -->

    	<div class="container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
					<h2>Ireo Fanafody</h2>
				</div>
				<div class="col-sm-6">
					<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal" ><i class="material-icons">&#xE147;</i> <span >Hampiditra fanafody</span></a>						
				</div>
			</div>
		</div>
          
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Famantarana</th>
					<th>Anarana</th>
					<th>Vidin'ny iray</th>
					<th>Isan'ny voafandrika</th>
					<th>Sisa</th>
					<th>Isan'ny fanafody</th>
					<th>Hanova</th>
				</tr>
			</thead>
			<tbody>
				<?php 

				$tab = $_SESSION["tab"] ;
				$unit = 'Ar';
				for($i=0; $i<$_SESSION["nbr"]; $i++){
					$id = $tab[$i]['id'];

				?>
                    		<tr>
					<td> <?=$tab[$i]['id'] ?></td>
					<td> <?=$tab[$i]['nom'] ?></td>
					<td> <?=$tab[$i]['prix_unit'] ; echo' '; echo $unit;?></td>
					<td> </td>
					<td> <?=$tab[$i]['nombre'] ?></td>
					<td> <?=$tab[$i]['nombre'] ?></td>
					<td>
						<a class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						<a href="#deleteEmployeeModal<?=$id?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
					</td>

					<!-- Delete Modal HTML -->
					<div id="deleteEmployeeModal<?=$id?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form   value ="<?=$id?>"  method="POST" id="forfa">
									<div class="modal-header">						
										<h4 class="modal-title">Hamafa fanafody</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">					
										<p>Hofafana marina ve io fanafody io ?</p>
										<p class="text-warning"><small>Tsy afaka averina intsony io raha voafafa !</small></p>
									</div>
									<div class="modal-footer">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Hajanona">
										<span ><input  id="<?=$id?>" type="button"  onclick="cacherform($(this).attr('id'))"  class="btn btn-danger" value="Fafana"  > </span>
									</div>
								</form>
							</div>
						</div>
					</div>

                    		</tr>	
				<?php } ?>	
				
                		</tbody>
            	</table>
	</div>
	
	
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="server.php" method="POST">
					<div class="modal-header">						
						<h4 class="modal-title">Hampiditra fanafody</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Famantarana</label>
							<input type="text" class="form-control" name ="ref" required>
						</div>
						<div class="form-group">
							<label>Anarana</label>
							<input type="text" class="form-control"  name ="anarana" required>
						</div>
						<div class="form-group">
							<label>Isan'ny fanafody</label>
							<input type="text" class="form-control" name="isa_amp" required>
						</div>
						
						<div class="form-group">
							<label>Vidin'ny iray</label>
							<input type="text" class="form-control" name="vidin_irai" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Hajanona">
						<input type="submit" class="btn btn-success" name="ampidiro" value="Ampidirina">
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Hampiditra fanafody</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Famatarana manokana</label>
							<input type="text" class="form-control"  required>
						</div>
						<div class="form-group">
							<label>Nom</label>
							<input type="text" class="form-control"  name="" required>
						</div>
						<div class="form-group">
							<label>Nombre Produit</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Nombre Reservé</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
								<label>Nombre Reste</label>
								<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Prix Unitaire</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Avereno">
						<input type="submit" class="btn btn-info" value="Ampidiro">
					</div>
				</form>
			</div>
		</div>
	</div>

	
	<div id="myModal" class="modal fade">
		<div class="modal-dialog modal-confirm">
			<div class="modal-content">
				<div class="modal-header">
					<div class="icon-box" onclick=vita()>
						<i class="material-icons">&#xE876;</i>
					</div>				
					<h4 class="" style="text-align: center !important">Vita!</h4>	
				</div>
				<div class="modal-body">
					<p class="text-center"> Voafafa tsara ilay fanafody</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-success btn-block" data-dismiss="modal" onclick=vita()>Okay</button>
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
				</script>, edited by Landris.
				
			  </div>
			</div>
	</footer>
	
	<button> <a href="server.php?deconnection"> Déconnexion </a> </button>

</body>
</html>                           

<?php   
} 

?>