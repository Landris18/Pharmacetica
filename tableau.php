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
			$succes = 'voafafa soa aman-tsara';
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

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="public/css/font-awesome.min.css">
<link rel="stylesheet" href="public/css/bootstrap.min.css">
<link rel="stylesheet" href="public/css/pharmacie.css">
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
<body>
    	<div class="container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
					<h2>Ireo <b>Fanafody</b></h2>
				</div>
				<div class="col-sm-6">
					<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Hampiditra fanafody</span></a>
					<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Hamafa</span></a>						
				</div>
			</div>
		</div>
          
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>
						<span class="custom-checkbox">
							<input type="checkbox" id="selectAll">
							<label for="selectAll"></label>
						</span>
					</th>
					<th>Référence</th>
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
					<td>
						<span class="custom-checkbox">
							<input type="checkbox" id="checkbox1" name="options[]" value="1">
							<label for="checkbox1"></label>
						</span>
					</td>
					<td> <?=$tab[$i]['id'] ?></td>
					<td> <?=$tab[$i]['nom'] ?></td>
					<td> <?=$tab[$i]['prix_unit'] ; echo $unit;?></td>
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
								<form  action="server.php?id=<?=$id?>" method="POST">
									<div class="modal-header">						
										<h4 class="modal-title">Hamafa fanafody</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">					
										<p>Hofafana marina ve io fanafody io ?</p>
										<p class="text-warning"><small>Tsy afaka averina intsony io raha voafafa an!.</small></p>
									</div>
									<div class="modal-footer">
										<input type="button" class="btn btn-default" data-dismiss="modal" value="Aza fafana">
										<input type="submit" class="btn btn-danger" value="Fafao">
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
							<label>Famatarana manokana</label>
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
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Avereno">
						<input type="submit" class="btn btn-success" name="ampidiro" value="Ampidiro">
						<h4 class="modal-title"><?=$erreur?></h4>
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
	
	<button >  <a href ="server.php?deconnection"> DECONNEXION </a></button>

</body>
</html>                           

<?php   
} 

?>