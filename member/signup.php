<?php

	$pageTitle = " 新規ユーザ登録 ";
	$pageDescription = "新しくユーザ登録をしてください。";

	$flag = $_POST['flag'];

	if ($flag == 1) {
		require_once "function.php";
		$dbh = dbCon();
		
		$userName = $_POST['userName'];
		$userPassword = $_POST['userPassword'];
		$userPasswordRe = $_POST['userPasswordRe'];
		$userDojoName = $_POST['userDojoName'];
		$userMail = $_POST['userMail'];
		$userBirthday = $_POST['userBirthday'];

		//入力チェックはrequired属性にて行う
		//パスワードのチェック
		$error = array();

		if ($userPassword != $userPasswordRe) {
			$error['notMatchUserEnterPassword'] = "入力されたパスワードが一致しません";
		}

		//エラーがすべて消えた時の処理

		if(count($error) == 0){

			session_start();

			$_SESSION['userName'] = $userName;
			$_SESSION['userPassword'] = $userPassword;
			$_SESSION['userDojoName'] = $userDojoName;
			$_SESSION['userMail'] = $userMail;
			$_SESSION['userBirthday'] = $userBirthday;
			$_SESSION['flag'] = 1;
			
			header('Location: check.php');
		}

	}
	
	require_once 'header.php';
	
?>

<div id="main">
	<div id="signup">
		<form action="" method="POST">
			<p class="center">お名前</p>
			<input type="text" name="userName" class="textbox" placeholder="自分の名前" required value='<?php print($userName); ?>'>
			<br>
			<p class="center">パスワード</p>
			<p class="errorP"><?php print($error["notMatchUserEnterPassword"]); ?></p>
			<input type="password" name="userPassword" class="textbox" placeholder="パスワード" required>
			<br>
			<p class="center">パスワードを再入力</p>
			<input type="password" name="userPasswordRe" class="textbox" placeholder="パスワードを再入力" required>
			<br>
			<p class="center">誕生日</p>
			<input type="date" name="userBirthday" class="dateBox" required>
			<br><br>
			<p class="center">普段来ているDojo</p>
			<select name="userDojoName">
				<option value="CDKS">CoderDojo Kashiwa</option>
				<option value="CDKH">CoderDojo Kashiwa-no-ha</option>
				<option value="CDNS">CoderDojo Nagareyama</option>
				<option value="CDOS">その他のDojo</option>
				<option value="CDKM">メンターとして参加</option>
			</select>
			<br><br>
			<p class="center">メールアドレス</p>
				<input type="text" name="userMail" class="textbox" placeholder="メールアドレス" required value='<?php print($userMail); ?>'>
			<br>
			<input type="hidden" name="flag" value="1">
			<input type="submit" value="登録する">

		</form>
	</div>
</div>

<?php
	require_once 'footer.php';

