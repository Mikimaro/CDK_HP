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
		$userBirthday = $_POST['userBirthdayYear'].$_POST['userBirthdayMonth'].$_POST['userBirthdayDay'];
		$userGrade = $_POST['userGrade'];
		$read = $_POST['read'];
		$joinDojo = "Kashiwa";

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

		if (empty($userBirthday)) {
			$err['userBirthday'] = "誕生日を入力してください";
		}

		if (empty($userGrade)) {
			$err['grade'] = "学年を選択してください";
		}

		if ($read !== "Yes") {
			$err['read'] = "利用規約に同意してください";
		}

		if (empty($err)) {
			require_once '../common/functions.php';

			$password = sha1($password1);

			$dbh = dbCon();
			
			//USER DATAを登録
			$sql = "UPDATE userData SET name = ?, mail = ?, password = ?, sex = ?, birthday = ?, grade = ?, joinDojo = ?, setupDate = now() where userID = ?";
  			$stmt = $dbh->prepare($sql);		
			$result = $stmt->execute(array($userName, $mail, $password, $userSex, $userBirthday, $userGrade, $joinDojo, $userID));

			//トレーニングシートにユーザ名を登録
			$sql = "INSERT INTO training_sheet(userID) VALUES (?)";
			$stmt = $dbh->prepare($sql);
			$flag = $stmt->execute(array($userName));

			if ($result == true) {
				header("Location: ../index.php");
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
			<p>自分のデータを完成させよう</p>

			<div id="err">
				<p><?php print($err['userName']);?></p>
				<p><?php print($err['mail']);?></p>
				<p><?php print($err['password1']);?></p>
				<p><?php print($err['password2']);?></p>
				<p><?php print($err['password']);?></p>
				<p><?php print($err['userSex']);?></p>
				<p><?php print($err['userBirthday']);?></p>
				<p><?php print($err['grade']);?></p>
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
					<tr><td class="tdf">性別</td><td class="tds">
						<input type="radio" id="boy" name="userSex" value="男">おとこのこ
						<input type="radio" id="girl" name="userSex" value="女">おんなのこ
						</td></tr>
					<tr><td class="tdf">生年月日</td><td class="tds">
						<select name="userBirthdayYear">
							<?php
								for ($i=1900; $i < date(Y); $i++) {
									print("<option value={$i}>{$i}</option>");
								}
								$y = date(Y);
								print("<option value={$y} selected=''>$y</otpion>");
							?>
						</select>年

						<select name="userBirthdayMonth">
							<?php
								for ($j=1; $j < 13; $j++) { 
									print("<option value={$j}>{$j}</option>");
								}
							?>
						</select>日

						<select name="userBirthdayDay">
							<?php
								for ($k=1; $k < 32; $k++) { 
									print("<option value={$k}>{$k}</option>");
								}
							?>
						</select>日
					</td></tr>

					<?php
						$selectGrade = $_POST['userGrade'];
						
						if ($selectGrade == "e1") {
							$e1 = "selected='''";
						}elseif ($selectGrade == 'e2') {
							$e2 = "selected=''";
						}elseif ($selectGrade == 'e3') {
							$e3 = "selected=''";
						}elseif ($selectGrade == 'e4') {
							$e4 = "selected=''";
						}elseif ($selectGrade == 'e5') {
							$e5 = "selected=''";
						}elseif ($selectGrade == 'e6') {
							$e6 = "selected=''";
						}elseif ($selectGrade == 'j1') {
							$j1 = "selected=''";
						}elseif ($selectGrade == 'j2') {
							$j2 = "selected=''";
						}elseif ($selectGrade == 'j3') {
							$j3 = "selected=''";
						}elseif ($selectGrade == 'other') {
							$other = "selected=''";
						}
					?>

					<tr><td class="tdf">学年</td><td class="tds">
						<select name="userGrade">
							<option value="e1" <?php print($e1); ?>>小学1年生</option>
							<option value="e2" <?php print($e2); ?>>小学2年生</option>
							<option value="e3" <?php print($e3); ?>>小学3年生</option>
							<option value="e4" <?php print($e4); ?>>小学4年生</option>
							<option value="e5" <?php print($e5); ?>>小学5年生</option>
							<option value="e6" <?php print($e6); ?>>小学6年生</option>
							<option value="j1" <?php print($j1); ?>>中学1年生</option>
							<option value="j2" <?php print($j2); ?>>中学2年生</option>
							<option value="j3" <?php print($j3); ?>>中学3年生</option>
							<option value="other" <?php print($other); ?>>その他</option>
						</select>
					</td></tr>
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