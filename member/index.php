<?php
	
	$pageTitle = "CDK Members.";
	$pageDescription = "CoderDojo Kashiwa メンバーのためのページです。";

	$dateFlag = true;
	$flag = $_POST['flag'];

	if($flag == 1){

		//ログイン処理

		require "LoginClass.php";
		require "function.php";

		$dbh = dbCon();		

		$userId = $_POST['userId'];
		$userPassword = sha1($_POST['userPassword']);

		$loginManager = new Login();
		$loginStatusFlag = $loginManager->getUser($userId, $userPassword, $dbh);

		if($loginStatusFlag){
			//ログイン処理の成功
			
			session_start();
			$_SESSION['loginStatus'] = true;
			$_SESSION['userId'] = $userId;

			
			if(substr($userId, 0, 4) == "CDKM"){
				header("Location: ./mentor/index.php");
			}else{
				header("Location: ./contents/index.php");
			}

			

		}else{
			//失敗

			$error['notmatch'] = "ユーザ名とパスワードの組み合わせが違います。";

		}


	}


	require_once 'header.php';


?>

	<div id="main">

		<p class="center">ログイン</p>

		<div id="login">
			<form action="" method="POST">

				<p class="error"><?php print($error['notmatch']); ?></p>

				<input type="text" name="userId" placeholder="ユーザID" class="textbox" required value="<?php print($userId);?>">
				<br>
				<input type="password" name="userPassword" placeholder="パスワード" class="textbox" required>
				<br>
				<input type="hidden" name="flag" value="1">
				<input type="submit" value="ログイン">
			</form>
		</div>
	</div>

	<div id="newRegesiter">
		<a href="./signup.php" class="signupA">【新規ユーザー登録】</a>
	</div>


<?php require_once 'footer.php'; ?>
