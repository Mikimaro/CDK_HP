<?php
	require_once '../common/functions.php';
	/*

	for ($i=1; $i<41  ; $i++) { 
		
		if ($i<10) {
			$userID = "CDKH".'000'.$i;
		}else{
			$userID = "CDKH".'00'.$i;
		}
		$pass = mt_rand(10000000, 99999999);

		$dbh = dbCon();

		$sql = "INSERT INTO userData(userID, password) VALUES (?, ?)";
		$stmt = $dbh->prepare($sql);
		$flag = $stmt->execute(array($userID, $pass));

	}

	*/