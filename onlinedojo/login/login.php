<?php
	require_once './signup/users.php';
	session_start();

  if ($_SESSION['status'] == 1) {
    # code...
  }

  // エラーメッセージ
  $errorMessage = "";

  $mail = $_POST["mail"];
  $pass = $_POST["password"];

  // 画面に表示するため特殊文字をエスケープする
  $viewUserId = htmlspecialchars($mail, ENT_QUOTES);

  // ログインボタンが押された場合
  if (isset($_POST["login"])) {

		$user = User::login($mail, $pass);
    if ($user != NULL) {
			//セッションにデータをセット
			$_SESSION['user_id'] = $user[0]['id'];
			$_SESSION['user_name'] = $user[0]['user_name'];
	    
      header("Location: ../content/index.php");
		}else{
      $error_message = "メールアドレスあるいはパスワードに誤りがあります。";
		}
  }
?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>サンプルアプリケーション</title>
  </head>
  <body>
  <form id="loginForm" name="loginForm" action="<?php print($_SERVER['PHP_SELF']) ?>" method="POST">
  <fieldset>
  <legend>ログインフォーム</legend>
  <div><?php echo $error_message ?></div>
  <label for="mail">メールアドレス</label><input type="text" id="mail" name="mail" value="<?php echo $viewUserId ?>">
  <br>
  <label for="password">パスワード</label><input type="password" id="password" name="password" value="">
  <br>
  <label></label><input type="submit" id="login" name="login" value="ログイン">
  </fieldset>
  <div>
    <ul>
    <li><a href="signup.php">Sign Up</a></li>
    </ul>
  </div>
  </form>
  </body>
</html>
