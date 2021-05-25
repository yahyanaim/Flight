<?php 
	if(isset($_POST['submit'])){
		$newEmploye = new volController();
		$newEmploye->addvol();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gestion Vol</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
</head>
<body>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Ajout Vol</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="Id">id</label>
							<input type="text" name="id" class="form-control">
						</div>
						<div class="form-group">
							<label for="Id">Time</label>
							<input type="text" name="time" class="form-control">
						</div>
						<div class="form-group">
							<label for="Date_Depart">Date Depart</label>
							<input type="text" name="Date_Depart" class="form-control" >
						</div>
						<div class="form-group">
							<label for="Destination">Destination</label>
							<input type="text" name="Destination" class="form-control" >
						</div>
						<!-- <div class="form-group">
							<label for="depart">Département*</label>
							<input type="text" name="depart" class="form-control" placeholder="Département">
						</div>
						<div class="form-group">
							<label for="poste">Poste*</label>
							<input type="text" name="poste" class="form-control" placeholder="Poste">
						</div>
						<div class="form-group">
							<label for="date_emb">Date Embauche*</label>
							<input type="date" name="date_emb" class="form-control">
						</div>
						<div class="form-group">
							<select class="form-control" name="statut">
								<option value="1">Active</option>
								<option value="0">Résilié</option>
							</select>
						</div> -->
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Ajouté</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>