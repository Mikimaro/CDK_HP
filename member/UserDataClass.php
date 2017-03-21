<?php

/**
 * ユーザデータを管理するクラスです。
 * 
 */
class UserData {
    
    function getUser($userID, $password, $dbh){
			$sql = "SELECT * from userData where user_id = :userID and user_password = :password limit 1";
			$stmt = $dbh -> prepare($sql);
			$stmt->execute(array(":userID"=>$userID, ":password" => $password));
			$user = $stmt->fetchAll();

            $userData = array();

            $userData['loginStatus'] = true;
            $userData['userId'] = $user[0]['user_id'];
            $userData['userName'] = $user[0]['user_name'];

			return $userData;
	}

    function getLatestNumber($dojoName, $dbh) {
        
        print("GetLatestNumber was on.<br>");

        $sql = "SELECT * from latestNumber";
		$stmt = $dbh -> prepare($sql);
		$stmt->execute();
		$result = $stmt->fetch();

        return $result[$dojoName];

   }

   function updateLatestNumber($dojoName, $newNumber, $dbh){

        print("UpdateLatestNumber was on.<br>");

        $sql = "UPDATE latestNumber SET {$dojoName} = ?";
  		$stmt = $dbh->prepare($sql);		
		$result = $stmt->execute(array($newNumber));
   }
   
}
