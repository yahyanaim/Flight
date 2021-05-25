<?php 

class vol {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM vol');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}

	static public function getvol($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM vol WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$vol = $stmt->fetch(PDO::FETCH_OBJ);
			return $vol;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO vol (id,time,Date_Depart,Destination)
			VALUES (:id,:time,:Date_Depart,:Destination)');
		$stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':time',$data['time']);
		$stmt->bindParam(':Date_Depart',$data['Date_Depart']);
		$stmt->bindParam(':Destination',$data['Destination']);


		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}
	static public function update($data){
		$stmt = DB::connect()->prepare('UPDATE vol SET id= :id,Date_Depart=:Date_Depart,time=:time,Destination=:Destination WHERE id=:id');
		$stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':time',$data['time']);
		$stmt->bindParam(':Date_Depart',$data['Date_Depart']);
		$stmt->bindParam(':Destination',$data['Destination']);
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

	static public function delete($data){
		$id = $data['id'];
		try{
			$query = 'DELETE FROM vol WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function searchvol($data){
		$Date_Depart = $data['Date_Depart'];
		$Destination = $data['Destination'];
		$query = 'SELECT * FROM vol WHERE  Destination=:Destination '   ;
	
				$stmt = DB::connect()->prepare($query);
				$stmt->execute(array(":Destination" => $Destination));
				$vol = $stmt->fetchAll();;
				return $vol;
	
	
	
	}
}
