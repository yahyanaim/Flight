<?php 


class ReservationController{




	public function AddReservation(){
		if(isset($_POST['submit'])){
			$data = array(
				'Destination' => $_POST['Destination'],
				'Date_Depart' => $_POST['Date_Depart'],
				'Date_Roteur' => $_POST['Date_Roteur'],
				'Class' => $_POST['Class'],
				'Adults' => $_POST['Adults'],
				'Children' => $_POST['Children'],
			);
			$result = Reservation::add($data);
			if($result === 'ok'){
				Session::set('success','Reservation Add');
				Redirect::to('Reservation');
			}else{
				echo $result;
			}
		}
	}
	
}



?>