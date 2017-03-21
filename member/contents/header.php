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
		
		//planを確認
		require_once "../LoginStatusClass.php";
		$loginStatusManager = new LoginStatus();
		$plan = $loginStatusManager->getPlan($userId);

		var_dump($plan);

		if($plan == "CDKM"){
			require_once "../logout.php";
		}

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
		<a href="./"><p class="headerTitle"><img src="../image/logo.png" class="headerImg">OnlineDojo 2.0</p></a>
			<p class="userDescription"><?php echo($userId); ?> <?php echo($userName); ?> さん</p>
			<p class="userDescription"><a href="../logout.php">ログアウトする</a></p>
	</div>

	<div id="userDescription">
		<p class="headerText"><?php echo($pageDescription); ?></p>
	</div>	
	