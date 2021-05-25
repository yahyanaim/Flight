<?php 
	if(isset($_POST['search'])){
	$data = new VolController();
		$vs = $data->findVols();
	 
    $Date_Depart=  $_POST['Date_Depart'];
    $Destination=  $_POST['Destination'];
    
 

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
    <link rel="stylesheet" href="Views/Style/Login.css">
    <link rel="stylesheet" href="Views/Style/custom.css">

    <title>Resultat</title>
    </head>

<div class="scrold">
<form  method="post">
	<table class="table table-striped table-dark">
					  <thead>
					    <tr>
					      <th>vol ID</th>
                    <th>Date_Depart</th>
                    <th>Destination </th>
                    <th>time</th>
					    </tr>
					  </thead>
					  <tbody>
               <?php foreach($vs as $v):?>
		<tr>
   


   <td><?php  echo $v['id'];?></td>
   <td><?php  echo $v['Date_Depart'];?></td>
   <td><?php  echo $v['Destination'];?></td>
   <td><?php  echo $v['time'];?></td>
   <td><input type="radio" name="id" required value="<?php  echo  $v['id'];?>"></td>
   <td>	<input type="number" name="np"  required></td>
 
        						</tr>
				
		<?php endforeach;?>
        </tbody>
            </table>

 
 
	
	
    					
<div style="
    display: flex;
    justify-content: center;
" > 
<input type="submit" value="Select vol" name="Select">
</div>
</form>




</div>



