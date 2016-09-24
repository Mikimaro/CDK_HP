<?php
	require_once '../../functions.php';
	
	$dbh = dbCon();
	$sql = 'SELECT * from webControll';
	$stmt = $dbh->query($sql);
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$json = json_encode($result);

	echo($json);