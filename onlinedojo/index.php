<?php

	$date = date("Y");

	if ($date == "2016") {

		session_start();
		require_once 'common/functions.php';
		$dbh = dbCon();

		function getUser($userID, $password, $dbh){
			$sql = "SELECT * from userData where userID = :userID and password = :password limit 1";
			$stmt = $dbh -> prepare($sql);
			$stmt->execute(array(":userID"=>$userID, ":password" => $password));
			$user = $stmt->fetch();
			return $user ? $user : false;
		}

		$loginStatus = $_SESSION['status'];
		$inputflag = $_POST['inputflag'];

		if ($loginStatus) {
			header("Location: ./content/index.php");
			exit;
		}

		if ($inputflag == 1) {
			$userID = $_POST['userID'];
			$password = $_POST['userPass'];

			$password1 = sha1($password);

			$err = array();

			if (empty($userID)) {
				$err['name'] = "ユーザIDを入力してください";
			}

			if (empty($password)) {
				$err['userPass'] = "パスワードを入力してください";
			}

			$me = getUser($userID, $password1, $dbh);

			//var_dump($me);

			if (!$me) {
				$err['err'] = "パスワードとメールアドレスの組み合わせが正しくありません";
			}

			if (empty($err)) {
				session_regenerate_id(true);

				$sql = "SELECT * from userData where userID = ? limit 1";
	    		$stmt = $dbh->prepare($sql);
	    		$stmt->execute(array($userID));
	    		$result = $stmt->fetch(PDO::FETCH_ASSOC);

				$_SESSION['status'] = true;
				$_SESSION['userID'] = $result['userID'];
				$_SESSION['userName'] = $result['name'];
				$_SESSION['userMail'] = $result['mail'];

				header('Location: content/');
				exit;
			}
		}

	
	}else{

		header("Location: support.html");

	}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>OnlineDojo</title>
	<link rel="stylesheet" href="./css/indexStyle.css" style="text/css">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssreset/cssreset-min.css">
	<link rel="shortcut icon" href="./img/favicon.ico" type="image/vnd.microsoft.icon">
</head>

<body>

	<div id="header">
		<h1>CoderDojo Kashiwa OnlineDojo</h1>
		<h1>Login</h1>
	</div>

	<div id="container">

		<div id="Login">

		<br>
			<img src="./img/img01.png">
			<p>CoderDojoでの学びをもっと深めよう</p>

		<br>

			<div id="err">
				<?php
					print("<p>{$err['name']}</p>");
					print("<p>{$err['userPass']}</p>");
					print("<p>{$err['err']}</p>");
				?>
			</div>

		<br>

			<form action="" method="POST">
				<table border="1">
					<tr><td>ユーザID</td><td><input type="text" name="userID"></td></tr>
					<tr><td>パスワード</td><td><input type="password" name="userPass"></td></tr>
				</table>
				<br>
				<input type="hidden" name="inputflag" value="1">
				<input type="submit" value="Login">
			</form>

		</div>
		<br>
		<a href="login/mentorLogin.php">メンター用ログインページ</a><br>
		<a href="login/firstLogin.php">はじめてログインする場合はこちら</a>
		<br>
	</div>
	
	<div id="footer">
		<p>Copyright(C)2014 CoderDojo Kashiwa</p>
		<p>Created by KIRIE MIYAJIMA</p>
	</div>
</body>
</html>