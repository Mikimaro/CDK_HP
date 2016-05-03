<?php
	session_start();
	$status = $_SESSION['status'];
	$userName = $_SESSION['userName'];
	//var_dump($status);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>OnlineDojo</title>
	<link rel="shortcut icon" href="./img/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript">
		function goIndex () {
			location.href = '../index.php';
		}
	</script>
</head>
<body>
	<div id="login">
		<?php
			if (!isset($_SESSION["userName"])) {
				echo '<a href="../login/login.php">【ログイン】</a>';
			}else{
				echo '<a href="../login/logout.php">【ログアウト】</a>';
			}
		?>
	</div>
	<div id="header">
			<h1>CoderDojo Kashiwa OnlineDojo</h1>
		</div>

	<div id="main">
		<!--
		<div id="navi">

			<ul class="menu">
				<li><a href="index.php">Top</a>
				<li><a href="concept.php">Concept</a></li>
				<li><a href="study.php">study</a></li>
				<li><a href="question.php">Question</a></li>
				<li><a href="discuss.php">Discussion</a></li>
				<li><a href="content.php">HTML Content</a></li>
				<li><a href="info.php">info</a></li>
			</ul>
		</div>
		-->
