<?php

/**
 * ユーザデータを管理するクラスです。
 * 
 */
class UserData {
    
    function getUser($userID, $password, $dbh){
    	
        require_once "function.php";
        $dbh = dbCon();
        
        $sql = "SELECT * from userData where user_id = :userID and user_password = :password limit 1";
		$stmt = $dbh -> prepare($sql);
		$stmt->execute(array(":userID"=>$userID, ":password" => $password));
		$user = $stmt->fetch();
		return $user ? $user : false;
	}

    function getLatestNumber($dojoName) {
        
        require_once "function.php";
        $dbh = dbCon();

        $sql = "SELECT {$dojoName} from latestNumber";
		$stmt = $dbh->query($sql);
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result[$dojoName];
       
   }
   
}
