<?php
    
    /**
     * Login
     */
    class Login{

        

        function auth($userID, $password, $dbh){
            $sql = "SELECT * from userData where user_id = :userID and user_password = :password limit 1";
			$stmt = $dbh -> prepare($sql);
			$stmt->execute(array(":userID"=>$userID, ":password" => $password));
			$result = $stmt->fetchAll();
    
            if(count($result) == 0){
                return false;
            }else{
                return true;
            }
            
        }

    }
    