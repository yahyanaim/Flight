<?php
class Admin{
	static public function LoginAdmin($data){
		$Email = $data['Email'];
		$Password = $data['Password'];
		try{
			$query = 'SELECT * FROM admin WHERE Email=:Email AND Password=:Password';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":Email" => $Email,":Password" => $Password));
			$Admin = $stmt->fetch(PDO::FETCH_OBJ);
			return $Admin;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}
}
?>