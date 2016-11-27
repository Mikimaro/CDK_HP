<?php
	$pageTitle = " 新規ユーザ登録 ";
	$pageDescription = "新しくユーザ登録をしてください。";

	require_once 'header.php';

	$flag = $_POST['flag'];

	if ($flag == 1) {
		//$dbCon = dbCon();

		$userName = $_POST['userName'];
		$userPassword = $_POST['userPassword'];
		$userPasswordRe = $_POST['userPasswordRe'];
		$userDojoName = $_POST['userDojoName'];
		$userMail = $_POST['userMail'];

		

	}

?>

<div id="main">
	<div id="signup">
		<form action="" method="POST">
			<p class="center">ユーザ名</p>
			<input type="text" name="userName" class="textbox" placeholder="ユーザ名">
			<br>
			<p class="center">パスワード</p>
			<input type="password" name="userPassword" class="textbox" placeholder="パスワード">
			<br>
			<p class="center">パスワードを再入力</p>
			<input type="password" name="userPasswordRe" class="textbox" placeholder="パスワードを再入力">
			<br>
			<p class="center">普段来ているDojo</p>
			<select name="userDojoName">
				<option value="CoderDojo Kashiwa">CoderDojo Kashiwa</option>
				<option value="CoderDojo Kashiwa-no-ha">CoderDojo Kashiwa-no-ha</option>
				<option value="CoderDojo Nagareyama">CoderDojo Nagareyama</option>
			</select>
			<p class="center">メールアドレス</p>
			<input type="text" name="userMail" class="textbox" placeholder="メールアドレス">
			<br>
			<input type="hidden" name="flag" value="1">
			<input type="submit" value="登録する">

		</form>
	</div>
</div>

<?php
	require_once 'footer.php';

