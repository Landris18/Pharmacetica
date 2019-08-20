<?php 
	require('connect_bdd.php');
	session_start();
	if (isset($_SESSION['solonanarana'] )) {
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gestion de Pharmacie</title>
<link rel="apple-touch-icon" sizes="76x76" href="public/img//add.jpeg">
   <link rel="icon" type="image/png" href="public/img/add.jpeg">
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
					<th>Isan'ny fanafody</th>
					<th>Isan'ny voafandrika</th>
					<th>Sisa</th>
					<th>Vidin'ny iray</th>
					<th>Hanova</th>
				</tr>
			</thead>
			<tbody>
                    		<tr>
					<td>
						<span class="custom-checkbox">
							<input type="checkbox" id="checkbox1" name="options[]" value="1">
							<label for="checkbox1"></label>
						</span>
					</td>
					<td>Thomas Hardy</td>
					<td>thomashardy@mail.com</td>
					<td>89 Chiaroscuro Rd, Portland, USA</td>
					<td>(171) 555-2222</td>
					<td>122222</td>
					<td>20 000 0000</td>
                        			<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        			</td>
                    		</tr>
                    		<tr>
					<td>
						<span class="custom-checkbox">
							<input type="checkbox" id="checkbox2" name="options[]" value="1">
							<label for="checkbox2"></label>
						</span>
					</td>
					<td>Dominique Perrier</td>
					<td>dominiqueperrier@mail.com</td>
					<td>Obere Str. 57, Berlin, Germany</td>
					<td>(313) 555-5735</td>
					<td>122222</td>
					<td>20 000 0000</td>
					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
					</td>
                    		</tr>
				<tr>
					<td>
						<span class="custom-checkbox">
							<input type="checkbox" id="checkbox3" name="options[]" value="1">
							<label for="checkbox3"></label>
						</span>
					</td>
                        			<td>Maria Anders</td>
                        			<td>mariaanders@mail.com</td>
					<td>25, rue Lauriston, Paris, France</td>
					<td>(503) 555-9931</td>
					<td>122222</td>
					<td>20 000 0000</td>
                        			<td>
                            				<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            				<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                       			 </td>
                   			 </tr>
                    		<tr>
					<td>
						<span class="custom-checkbox">
							<input type="checkbox" id="checkbox4" name="options[]" value="1">
							<label for="checkbox4"></label>
						</span>
					</td>
					<td>Fran Wilson</td>
					<td>franwilson@mail.com</td>
					<td>C/ Araquil, 67, Madrid, Spain</td>
					<td>(204) 619-5731</td>
					<td>122222</td>
					<td>20 000 0000</td>
                        			<td>
                            				<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            				<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        			</td>
                    		</tr>					
				<tr>
					<td>
						<span class="custom-checkbox">
							<input type="checkbox" id="checkbox5" name="options[]" value="1">
							<label for="checkbox5"></label>
						</span>
					</td>
					<td>Martin Blank</td>
					<td>martinblank@mail.com</td>
					<td>Via Monte Bianco 34, Turin, Italy</td>
					<td>(480) 631-2097</td>
					<td>122222</td>
					<td>20 000 0000</td>
					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
					</td>
                    		</tr> 
                		</tbody>
            	</table>
	</div>
	
	
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
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
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Anarana</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Isan'ny fanafody</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Isan'ny voafandrika</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Sisa</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Vidin'ny iray</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Avereno">
						<input type="submit" class="btn btn-success" value="Ampidiro">
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
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nom</label>
							<input type="text" class="form-control" required>
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
	
	
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
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