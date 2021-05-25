<?php 

	if(isset($_POST['submit'])){
		$data = new ReservationController();
		$Reservation = $data->AddReservation();
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 -
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="Views/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="Views/css/style.css" />

    <link rel="stylesheet" href="Views/Style/custom.css">

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <title>Reservation</title>
</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand"><img src="Views/img/logo.png" alt="fly"></a>
            </div>
        
            <ul class="nav navbar-nav navbar-right">
			<li class="active"><a href="<?php echo BASE_URL;?>Signup" title="connexion" >
						 <?php echo "Reservation";?></a></li>
		    <li class="active"><a href="<?php echo BASE_URL;?>logout" title="Déconnexion" >
					     <?php echo "Logout";?></a></li>
            </ul>
        </div>
    </nav>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form action="Resultat"  method="post">
								<div class="form-group">
									<span class="form-label" id="f">Your Destination</span>
									<input class="form-control" type="text" name="Destination" placeholder="Enter a destination :">
								</div>

                                <div style="display: flex; gap: 5%"> 
                                    <input type="radio" checked id="Vol1" name="Vol1" value="Simple Aller">
                                    <label for="male">Simple-Aller</label><br>
                                    <input type="radio" id="Vol2" name="Vol1" value="Aller Roteur">
                                    <label for="female">Aller-Roteur</label><br><br>
                                </div>

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check In</span>
											<input class="form-control" name="Date_Depart" type="date" >
										</div>
									</div>
									<div  style="display: none" class="col-sm-6"id="form-label">
										<div class="form-group">
											<span class="form-label" >Check out</span>
											<input class="form-control" name="Date_Roteur" type="date" >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Class</span>
											<select class="form-control" name="Class">
												<option>First</option>
												<option>Economy</option>
												<option>Business</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Adults</span>
											<select class="form-control" name="Adults">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Children</span>
											<select class="form-control" name="Children">
												<option>0</option>
												<option>1</option>
												<option>2</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button type="submit" name="search" class="submit-btn">Reserve</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script>
    let radio1 = document.querySelector("#Vol1");
    let radio2 = document.querySelector("#Vol2");
    let returnInput = document.querySelector("#form-label");

    radio1.addEventListener('change', function () {

        returnInput.style.display = "none";
    });

    radio2.addEventListener('change', function () {
        returnInput.style.display = "block";
        
    });


</script>

</body>

</html>


</body>

</html>