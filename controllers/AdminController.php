<?php 

class AdminController {

	public function auth(){
		if(isset($_POST['submit'])){
			$data['Email'] = $_POST['Email'];
			$data['Password'] = $_POST['Password'];
			$result = Admin::LoginAdmin($data);
			if($result->Email === $_POST['Email'] && $result->Password === $_POST['Password']){

				$_SESSION['logged'] = true;
				$_SESSION['Email'] = $result->Email;
				Redirect::to('vol');

			}else{
			
				Session::set('error','Pseudo ou mot de passe est incorrect');
				Redirect::to('LoginAdmin');
			}
		}
	}
	static public function logout(){
		session_destroy();
	}

}
