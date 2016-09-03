<?php
	date_default_timezone_set('Asia/Tokyo');
	session_start();
	$status = $_SESSION['status'];
	$userID = $_SESSION['userID'];
	$userName = $_SESSION['userName'];
	$userMail = $_SESSION['userMail'];
	//var_dump($status);
	
	if (empty($status)) {
		header("Location: ../");
		exit;
	}

	if (substr($userID, 0, 4) == "CDKM") {
		$showFlag = 1;	//メンター
		$_SESSION['dojoName'] = "メンター";
	}elseif (substr($userID, 0, 4) == "CDKS") {
		$showFlag = 0;
		$_SESSION['dojoName'] = "Kashiwa";
	}elseif(substr($userID, 0, 4) == "CDKH"){
		$showFlag = 0;	
		$_SESSION['dojoName'] = "Kashiwa-no-ha";
	}

	$dojoName = $_SESSION['dojoName'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>OnlineDojo</title>
	<link rel="shortcut icon" href="./img/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssreset/cssreset-min.css">
	
	<script type="text/javascript">
		function goIndex () {
			location.href = './';
		}
	</script>
	
	<link href="js/popBox/popbox.css" type="text/css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<script src="js/popBox/popbox.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" href="../js/modalView/modal.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


</head>
<body>
	<div id="login">
		<a href="./../login/logout.php">【ログアウト】</a>
			<?php
				if ($showFlag == 1) {
					print("<p>メンター用アカウントでログイン中</p>");
				}else{
					print("<p>生徒用アカウントでログイン中</p>");
				}
			?>
	</div>
	<div id="header">
			<h1>OnlineDojo</h1>
		</div>
	<div id="main">
		<div id="navi">
			<ul class="menu">
				<li class="leftLi"><a href="./">トップ</a>
				<li><a href="study.php">まなぶ</a></li>
				<li><a href="question.php">しつもんする</a></li>
				<li><a href="discuss.php">はなしあう</a></li>
				<li><a href="content.php">HTMLの作品</a></li>
				<li><a href="info.php">じょうほう</a></li>
				<li><a href="myPage.php">マイページ</a></li>
				<li><a href="joinDojo.php">さんかする</a></li>
			</ul>
		</div> <!-- naviのとじタグ -->
