<?php
	function dbCon() {

		//0:本番 1:ローカル
		$debugFlag = 1;

		if ($debugFlag == 0) {
			
	        $dsn = 'mysql:dbname=mjk0329_coderdojo;host=mysql481.db.sakura.ne.jp';
	    	$user = 'mjk0329';
	    	$password = 'mjk-10510179';
	        
	    }elseif ($debugFlag == 1) {
		    
			$dsn = 'mysql:dbname=new_onlinedojo;host=localhost';
	    	$user = 'root';
	    	$password = 'root';

	    }else{
	    	print("error");
	    }

    	$connOpt = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

 		// DBサーバーへコネクト
    	$dbh = new PDO($dsn, $user, $password, $connOpt);
    	return $dbh;
	}

	function getUser($userID, $password, $dbh){
		$sql = "SELECT * from userData where user_id = :userID and user_password = :password limit 1";
		$stmt = $dbh -> prepare($sql);
		$stmt->execute(array(":userID"=>$userID, ":password" => $password));
		$user = $stmt->fetch();
		return $user ? $user : false;
	}