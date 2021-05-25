<?php 

class volController{

	public function getAllvol(){
		$vol = vol::getAll();
		return $vol;
	}

	public function getOnevol(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$vol = vol::getvol($data);
			return $vol;
		}
	}
	public function findvols(){
		if(isset($_POST['search'])){
			$data = array(
				'Date_Depart' => $_POST['Date_Depart'],
			    'Destination' => $_POST['Destination'],
		);
		}
		$vols = vol::searchvol($data);
		return $vols;
	} 

	public function addvol(){
		if(isset($_POST['submit'])){
			$data = array(
				'id' => $_POST['id'],
				'time' => $_POST['time'],
				'Date_Depart' => $_POST['Date_Depart'],
				'Destination' => $_POST['Destination'],
			);
			$result = vol::add($data);
			if($result === 'ok'){
				Session::set('success','Vol Ajouté');
				Redirect::to('vol');
			}else{
				echo $result;
			}
		}
	}

	public function updatevol(){
		if(isset($_POST['submit'])){
			$data = array(
				'id' => $_POST['id'],
				'time' => $_POST['time'],
				'Date_Depart' => $_POST['Date_Depart'],
				'Destination' => $_POST['Destination'],
			);
			$result = vol::update($data);
			if($result === 'ok'){
				Session::set('success','Vol Modifié');
				Redirect::to('vol');
			}else{
				echo $result;
			}
		}
	}
	public function deletevol(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = vol::delete($data);
			if($result === 'ok'){
				Session::set('success','Vol Supprimé');
				Redirect::to('vol');
			}else{
				echo $result;
			}
		}
	}

}



?>