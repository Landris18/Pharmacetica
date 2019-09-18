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
	if (isset($_GET['erreur_ref_ana_mitov'])){
		if ($_GET['erreur_ref_ana_mitov'] == 'true') {
			$err_jiab = 'Efa misy io famantarana na io anarana io';
		}
	}
	//erreur isa----------------------------------------------------------------------------------------------------------
	if (isset($_GET['erreur_isa'])){
		if ($_GET['erreur_isa'] == 'true') {
			$err_jiab = "Hamarino tsara ny isan'ny fanafody nampidirinao";
		}
	}
	//erreur vidy----------------------------------------------------------------------------------------------------------
	if (isset($_GET['erreur_vola'])){
		if ($_GET['erreur_vola'] == 'true') {
			$err_jiab = "Hamarino tsara ny vidin'ny fanafody nampidirinao";
		}
	}
	if (isset($_GET['erreur_reference_int'])){
		if ($_GET['erreur_reference_int'] == 'true') {
			$err_jiab = "Hamarino tsara ny vidin'ny fanafody nampidirinao";
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

<link rel="stylesheet" href="public/css/modal_succes_supp.css">

<script src="public/js/jquery.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
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


</head>

<style>
	body{
		font-family: Poppins !important;
	}

</style>

<body onclick=pageb()>


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
					$nom = $tab[$i]['nom'];
					$prix_unit = $tab[$i]['prix_unit'];
					$nombre = $tab[$i]['nombre'];
					$nc = $tab[$i]['nombre_commande'];

				?>
                    		<tr>
					<td> <?=$tab[$i]['id'] ?></td>
					<td> <?=$tab[$i]['nom'] ?></td>
					<td> <?=$tab[$i]['prix_unit'] ; echo' '; echo $unit;?></td>
					<td> <?=$tab[$i]['nombre_commande'] ?></td>
					<td> <?=$tab[$i]['nombre'] ?></td>
					<td> <?=$tab[$i]['nombre'] ?></td>
					<td>
						<a href="#eModal<?=$id?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						<a href="#deleteEmployeeModal<?=$id?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
					</td>

					<!-- Delete Modal HTML -->
					<div id="deleteEmployeeModal<?=$id?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form value ="<?=$id?>"  method="POST" id="forfa">
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


					<!-- Hanova ny mahakasika ilay fanafody -->
					<div id="eModal<?=$id?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<form id='mod<?=$id?>'>
									<div class="modal-header">						
										<h4 class="modal-title">Hanova fanafody</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">					
										<div class="form-group">
											<label>Famantarana</label>
											<input type="text"  class="form-control" id="refer_v" disabled="disabled" name ="ref_v" value="<?=$id?>" required>
										</div>
										<div class="form-group">
											<label>Anarana</label>
											<input type="text" class="form-control" id="anar_v" name ="anarana_v" disabled="disabled" value="<?=$nom?>" required>
										</div>
										<div class="form-group">
											<label>Isan'ny fanafody</label>
											<input type="text" class="form-control" id="isani_v" name="isa_amp_v" value="<?=$nombre?>" required>
										</div>
										<div class="form-group">
											<label>Vidin'ny iray</label>
											<input type="text" class="form-control" id="vidin_v" name="vidin_irai_v" value="<?=$prix_unit?>" required>
										</div>					
									</div>
									<div class="modal-footer">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Hajanona">
										<input type="button" id=<?=$id?> onclick="modimed($(this).attr('id'))" class="btn btn-info" name="manova" value="Hanova">
									</div>
									<div class="form-group">
										<label style="color:red !important; margin-left:15% !important;" id="notis"></label>
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
				<form action="server.php" method="POST"  id="forma">
					<div class="modal-header">						
						<h4 class="modal-title">Hampiditra fanafody</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Famantarana</label>
							<input type="text" id= "refer" class="form-control" name ="ref" required>
						</div>
						<div class="form-group">
							<label>Anarana</label>
							<input type="text"  id="anar" class="form-control"  name ="anarana" required>
						</div>
						<div class="form-group">
							<label>Isan'ny fanafody</label>
							<input type="text" id="isani" class="form-control" name="isa_amp" required>
						</div>
						
						<div class="form-group">
							<label>Vidin'ny iray</label>
							<input type="text" id="vidini" class="form-control" name="vidin_irai" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Hajanona">
						<input type="button" onclick=ajoumed() class="btn btn-success" name="ampidiro" value="Ampidirina">
					</div>
					<div class="form-group">
						<label style="color:red !important; margin-left:15% !important;" id="notis"></label>
					</div>
				</form>
			</div>
		</div>
	</div>



	
	<!-- Voafafa tsara ilay fanafody -->
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



	<!-- Tafiditra tsara ilay fanafody -->
	<div id="myModalt" class="modal fade">
		<div class="modal-dialog modal-confirm">
			<div class="modal-content">
				<div class="modal-header">
					<div class="icon-box" onclick=vita()>
						<i class="material-icons">&#xE876;</i>
					</div>				
					<h4 class="" style="text-align: center !important">Vita!</h4>	
				</div>
				<div class="modal-body">
					<p class="text-center"> Tafiditra tsara ilay fanafody</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-success btn-block" data-dismiss="modal" onclick=vita()>Okay</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Voaova tsara ilay fanafody -->
	<div id="myModalh" class="modal fade">
		<div class="modal-dialog modal-confirm">
			<div class="modal-content">
				<div class="modal-header">
					<div class="icon-box" onclick=vita()>
						<i class="material-icons">&#xE876;</i>
					</div>				
					<h4 class="" style="text-align: center !important">Vita!</h4>	
				</div>
				<div class="modal-body">
					<p class="text-center"> Voaova tsara ilay fanafody</p>
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
	<script src="tableau.js"></script>
</body>

</html>                           

<?php   
} 

?>