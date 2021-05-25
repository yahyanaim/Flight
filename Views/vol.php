<?php 
	if(isset($_POST['find'])){
		$data = new volController();
		$vol = $data->findvol();
	}else{
		$data = new volController();
		$vol = $data->getAllvol();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gestion Vol</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">


	<style>
		

		body
		{
			
			background-image: url('Views/img/background.png') ;
			background-repeat: no-repeat;
			background-size: cover; 	
			font-size: 25px;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;

			
		}
	
		.bg-light
		{
			background-color: transparent !important;
			box-shadow: 10px 5px 20px -5px rgba(0, 0, 0, 0.3);
	
			
		}
	
		</style>
</head>
<body>
<div class="container" style="position: relative; margin-top: 5%;">
<h1 style=" text-align: center; color:white ; font-weight: 700;">GESTION DE VOL</h1>
	<div class="row my-4">
		<div class="col-md-10 mx-auto">
			<?php include('./views/includes/alerts.php');?>
			<div class="card" style=" background-color: transparent;">
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>add" class="btn btn-sm btn-primary mr-2 mb-2">
						<i class="fas fa-plus"></i>
					</a>
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<a href="<?php echo BASE_URL;?>logout" title="Déconnexion" class="btn btn-link mr-2 mb-2">
						<i class="fas fa-user mr-2"> <?php echo "Logout";?></i>
					</a>
					<form method="post" class="float-right mb-2 d-flex flex-row">
						<input type="text" class="form-control" name="search" placeholder="Recherche">
						<button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
					</form>
					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">id</th>
						  <th scope="col">time</th>
					      <th scope="col">Date Depart</th>
					      <th scope="col">Destination</th>
					
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($vol as $vol):?>
					    	<tr>
						      <th scope="row"><?php echo $vol['id']; ?></th>
							  <td><?php echo $vol['time'];?></td>
						      <td><?php echo $vol['Date_Depart'];?></td>
						      <td><?php echo $vol['Destination'];?></td>
						  
						
						      <td class="d-flex flex-row">
						      	<form method="post" class="mr-1" action="update">
						      		<input type="hidden" name="id" value="<?php echo $vol['id'];?>">
						      		<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
						      	</form>
						      	<form method="post" class="mr-1" action="delete">
						      		<input type="hidden" name="id" value="<?php echo $vol['id'];?>">
						      		<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						      	</form>
						      </td>
						    </tr>
					   	<?php endforeach;?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
						</body>