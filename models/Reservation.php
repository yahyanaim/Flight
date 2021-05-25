<?php 

class Reservation {


	static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO reservation (Destination,Date_Depart,Date_Roteur,Class,Adults,Children)
			VALUES (:Destination,:Date_Depart,:Date_Roteur,:Class,:Adults,:Children)');
		$stmt->bindParam(':Destination',$data['Destination']);
		$stmt->bindParam(':Date_Depart',$data['Date_Depart']);
		$stmt->bindParam(':Date_Roteur',$data['Date_Roteur']);
		$stmt->bindParam(':Class',$data['Class']);
		$stmt->bindParam(':Adults',$data['Adults']);
		$stmt->bindParam(':Children',$data['Children']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}


	

}
?>
