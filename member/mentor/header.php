<?php
	session_start();

	$loginStatus = $_SESSION['loginStatus'];

	if(!$loginStatus){
		header("Location: ../index.php");
	}else{
		require_once "../TrainingSheetClass.php";
        require_once "../function.php";

		$userId = $_SESSION["userId"];
		$userName = $_SESSION['userName'];

	}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
	<title>CDK members</title>
</head>

<body>
	<div id="header">
		<img src="../image/logo.png" class="headerImage">

		<p class="headerTitle">OnlineDojo 2.0</p>
	
			<?php

				if ($dateFlag) {

				}else{
					echo("<p class='headerSubTitle'>【{$pageTitle}】</p>");

				}

			?>

			<p class="headerText"><?php echo($pageDescription); ?></p>

			

	</div>	
	