<?php 

class UsersController {

	public function auth(){
		if(isset($_POST['submit'])){
			$data['Email'] = $_POST['Email'];
			$data['Password'] = $_POST['Password'];
			$result = User::Login($data);
			if($result->Email === $_POST['Email'] && $result->Password === $_POST['Password']){

				$_SESSION['logged'] = true;
				$_SESSION['Email'] = $result->Email;
				Redirect::to('Reservation');

			}else{
			
				Session::set('error','Pseudo ou mot de passe est incorrect');
				Redirect::to('Login');
			}
		}
	}

	public function Signup(){
		if(isset($_POST['submit'])){
			$options = [
				'cost' => 12
			];
			$password = password_hash($_POST['Password'],PASSWORD_BCRYPT,$options);
			$data = array(
				'Name' => $_POST['Name'],
				'Last_Name' => $_POST['Last_Name'],
				'Email' => $_POST['Email'],
				'Password' => $_POST['Password'],
				
			);
			$result = User::createUser($data);
			if($result === 'ok'){
				Session::set('success','Compte crée');
				Redirect::to('Login');
			}else{
				echo $result;
			}
		}
	}

	static public function logout(){
		session_destroy();
	}


}
