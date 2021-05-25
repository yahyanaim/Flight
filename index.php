<?php 

require_once './autoload.php';
require_once './controllers/HomeController.php';
require_once './controllers/UsersController.php';
require_once './controllers/AdminController.php';
require_once './controllers/volController.php';


$home = new HomeController();

$pages = ['Login','Signup','logout', 'Reservation' , 'vol','add','delete', 'update' ,'LoginAdmin' , 'Resultat'];

if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){

	if(isset($_GET['page'])){
		if(in_array($_GET['page'],$pages)){
			$pages = $_GET['page'];
			$home->index($pages);
		}else{
			include('views/includes/404.php');
		}
	}else{
		$home->index('Reservation');
	}

}else if(isset($_GET['page']) && $_GET['page'] === 'Signup'){
	$home->index('Signup');
}
else if(isset($_GET['page']) && $_GET['page'] === 'Login'){
	$home->index('Login');
}
else{
	$home->index('LoginAdmin');
	
}


?>