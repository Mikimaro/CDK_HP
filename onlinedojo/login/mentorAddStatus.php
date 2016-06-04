<?php
	session_start();

	$userID = $_SESSION['userID'];
	$addStatus = $_SESSION['addStatus'];

	if ($addStatus !== true) {
		header("Location: ../index.php");
	}

	$inputflag = $_POST['inputflag'];

	if ($inputflag == 1) {
		
		$userName = $_POST['userName'];
		$mail = $_POST['userMail'];
		$password1 = $_POST['pw1'];
		$password2 = $_POST['pw2'];
		$userSex = $_POST['userSex'];
		$read = $_POST['read'];

		$err = array();		

		if (empty($userName)) {
			$err['userName'] = "ユーザ名を入力してください";
		}

		if (empty($mail)) {
			$err['mail'] = "メールアドレスを入力してください";
		}

		if (empty($password1)) {
			$err['password1'] = "パスワードを入力してください";
		}

		if (empty($password2)) {
			$err['password2'] = "パスワードをもう一度入力してください";
		}

		if ($password1 !== $password2) {
			$err['password'] = "パスワードが一致しません";
		}

		if (empty($userSex)) {
			$err['userSex'] = "性別を選択してください";
		}

		if ($read !== "Yes") {
			$err['read'] = "利用規約に同意してください";
		}

		if (empty($err)) {
			require_once '../common/functions.php';

			$dbh = dbCon();
			
			$sql = "UPDATE mentorData SET name = ?, mail = ?, password = ?, sex = ?, setupDate = now() where userID = ?";
  			$stmt = $dbh->prepare($sql);		
			$result = $stmt->execute(array($userName, $mail, sha1($password1), $userSex, $userID));

			if ($result == true) {
				header("Location: ../login/mentorLogin.php");
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>OnlineDojo</title>
	<link rel="stylesheet" href="../css/indexStyle.css" style="text/css">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssreset/cssreset-min.css">
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="stylesheet" type="text/css" href="../signup/css/signUpStyle.css">
</head>

<body>

	<div id="header">
		<h1>CoderDojo Kashiwa OnlineDojo</h1>
	</div>

	<div id="container">

		<div id="Login">

		<br>
			<img src="../img/img01.png">
			<p>自分のデータを完成させてください</p>

			<div id="err">
				<p><?php print($err['userName']);?></p>
				<p><?php print($err['mail']);?></p>
				<p><?php print($err['password1']);?></p>
				<p><?php print($err['password2']);?></p>
				<p><?php print($err['password']);?></p>
				<p><?php print($err['userSex']);?></p>
				<p><?php print($err['read']);?></p>

			</div>

		<br>
			<table border="1">
				<form action="" method="POST">
					<input type="hidden" name="input_flag" value="1">
					<tr><td class="tdf">ユーザID</td><td><?php print($userID); ?></td></tr>
					<tr><td class="tdf">名前<br>（本名で登録)</td><td><input type="text"  class='text' name="userName" value="<?php echo $_POST["userName"]; ?>"></td></tr>
					<tr><td class="tdf">メールアドレス</td><td class="tds"><input type="text" class='text' name="userMail" value="<?php echo $mail; ?>"></td></tr>
					<tr><td class="tdf">パスワード</td><td class="tds"><input type="password"  class='text' name="pw1"></td></tr>
					<tr><td class="tdf">パスワード（再入力）</td><td class="tds"><input type="password" name="pw2" class='text'></td></tr>	
					<tr>
						<td class="tdf">性別</td><td class="tds">
						<input type="radio" id="boy" name="userSex" value="男">おとこのこ
						<input type="radio" id="girl" name="userSex" value="女">おんなのこ
						<input type="radio" id="other" name="userSex" value="その他">その他
						</td>
					</tr>
					
<!--
					<tr><td class="tdf">所属Dojo</td><td class="tds">
						<select name="joinDojo">
					   		<option value="Kashiwa">CoderDojo Kashiwa</option>
						</select>
					</td></tr>
-->
			</table>

			</div>
				<br>
				<p><input type="checkbox" name="read" value="Yes"><a href="../signup/policy.html" target="_blank">利用規約</a>に同意する</p>
				<br>
				<input type="hidden" name="inputflag" value="1">
				<input type="submit" value="登録する">
			</form>

		</div>
	</div>
	<br>
	<br>
	<p>ユーザIDとは：メンバーズカードの表に書かれているあなたのIDです</p>
	<p>仮パスワード：メンバーズカードの裏に書かれている仮のパスワードです</p>
	<div id="footer">
		<p>Copyright(C)2014 CoderDojo Kashiwa</p>
		<p>Created by KIRIE MIYAJIMA</p>
	</div>
</body>
</html>