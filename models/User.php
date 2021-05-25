<?php
class User{

	static public function Login($data){
		$Email = $data['Email'];
		$Password = $data['Password'];
		try{
			$query = 'SELECT * FROM user WHERE Email=:Email AND Password=:Password';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":Email" => $Email,":Password" => $Password));
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function createUser($data){
		$stmt = DB::connect()->prepare('INSERT INTO user (Name,Last_Name,Email,Password)
			VALUES (:Name,:Last_Name,:Email,:Password)');
		$stmt = $stmt->execute(array(":Name"=>$data['Name'],":Last_Name"=>$data['Last_Name'],":Email"=>$data['Email'],":Password"=>$data['Password']));	
	
		if($stmt){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt = null;
	}

}

 ?>