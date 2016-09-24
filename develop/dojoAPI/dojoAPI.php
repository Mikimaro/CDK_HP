<?php
	require_once '../../functions.php';
	
	$dbh = dbCon();

	//回数をゲット
	$sql = 'SELECT * from webControll';
	$stmt = $dbh->query($sql);
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	$num = $result[0]["nextDojoNumber"];


	$sql = 'SELECT * from setData where times ='.$num.' ORDER BY id DESC';
	$stmt = $dbh->query($sql);
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$json = json_encode($result);

	echo($json);
