<?php

	require_once '../common/functions.php';

	$flag = $_POST['flag'];

	if ($flag == 1) {
		
		$dbh = dbCon();

		$userName = $_POST['userID'];

		$sql = "INSERT INTO training_sheet(userID) VALUES (?)";
		$stmt = $dbh->prepare($sql);
		$flag = $stmt->execute(array($userName));
	
	}	

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
</head>

<body>
	<form action="" method="POST">
		<input type="text" name="userID">
		<input type="hidden" name="flag" value="1">
		<input type="submit" value="送信">
	</form>
</body>