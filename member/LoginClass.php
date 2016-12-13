<?php
    
    /**
     * Login
     */
    class Login{

        function getUser($userID, $password, $dbh){
			$sql = "SELECT * from userData where user_id = :userID and user_password = :password limit 1";
			$stmt = $dbh -> prepare($sql);
			$stmt->execute(array(":userID"=>$userID, ":password" => $password));
			$user = $stmt->fetch();
			return $user ? $user : false;
		}

    }
    