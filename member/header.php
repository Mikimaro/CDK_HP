<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
	<title>CDK members</title>
</head>

<body>
	<div id="header">
		<p class="headerTitle"><img src="./image/logo.png" class="headerImg">OnlineDojo 2.0</p>
		
			<?php

				if ($dateFlag) {
			
					require_once 'function.php';
					$dbh = dbCon();
					$id = 1;
					$sql = "SELECT * from webControll where id = 1";
					$stmt = $dbh -> prepare($sql);
					$stmt->execute(array(":id = $id"));
					$result = $stmt->fetchAll();
					$date = $result[0]["nextDojoDate"];
					$times = $result[0]["nextDojoNumber"];

					//echo("<p class='dateText'>次回のDojo：{$date}( #{$times} )</p>");

				}

			?>
		
	</div>	