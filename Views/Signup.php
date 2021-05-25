<?php 
	if(isset($_POST['submit'])){
        
		$createUser = new UsersController();
		$createUser->Signup();
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
    </style>
    <link rel="stylesheet" href="Views/Style/Signup.css">
    <link rel="stylesheet" href="Views/Style/custom.css">

    <title>SIGNUP</title>
    </head>
<body>
    <div id="Signup">
        <div class="container">
            <div id="Signup-row" class="row justify-content-center align-items-center">
                <div id="Signup-column" class="col-md-6">
                    <!-- <?php include('./views/includes/alerts.php');?> -->
                    <div id="Signup-box" class="col-md-12">
                        <form id="Signup-form" class="form" method="POST">
                            <h3 class="text-center text-info">Sign Up</h3><br>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" placeholder="Name :" name="Name" id="Name" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="last name">Last Name</label>
                                <input type="text" placeholder="Last Name :" name="Last_Name" id="LastName" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" placeholder="Email :" name="Email" id="Email" class="form-control">
                            </div>
                            <br>
                            <!-- <div class="form-group">
                                <input type="text" placeholder="Tel :" name="Tel" id="Tel" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" placeholder="Age :" name="Age" id="Age" class="form-control">
                            </div>
                            <br> -->
                            <div class="form-group">
                                <label for="password">Password </label>
                                <input type="text" placeholder="Password :" name="Password" id="password" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Sign Up">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>