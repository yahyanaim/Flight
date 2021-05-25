<?php 
	if(isset($_POST['id'])){
		$exitvol = new volController();
		$vol = $exitvol->getOnevol();
	}else{
		Redirect::to('home');
	}
	if(isset($_POST['submit'])){
		$exitvol = new volController();
		$exitvol->updatevol();
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
				<div class="card-header">Modifié Vol</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
						    <label for="Id">id</label>
							<input type="text" name="id" class="form-control" placeholder="id"
							value="<?php echo $vol->id; ?>"
							>
						</div>
						<div class="form-group">
						    <label for="Id">time</label>
							<input type="text" name="time" class="form-control" placeholder="Time"
							value="<?php echo $vol->time; ?>"
							>
						</div>
						<div class="form-group">
						    <label for="Date_Depart">Date Depart</label>
							<input type="text" name="Date_Depart" class="form-control" placeholder="Date Depart"
							value="<?php echo $vol->Date_Depart; ?>"
							>
						</div>
						<div class="form-group">
						    <label for="Destination">Destination</label>
							<input type="text" name="Destination" class="form-control" placeholder="Destination"
								value="<?php echo $vol->Destination; ?>">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>