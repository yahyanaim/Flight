<?php 
	if(isset($_POST['id'])){
		$exitEmploye = new volController();
		$exitEmploye->deletevol();
	}
?>