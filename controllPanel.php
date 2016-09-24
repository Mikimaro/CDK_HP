<?php
	$flag = $_POST['flag'];

	if ($flag == 1) {
		$nextDate = $_POST['nextDojoDate'];
		$nextNumber = $_POST['nextDojoNumber'];
		$firstJoinFormStatus = $_POST['firstJoinFormStatus'];
		$repeaterFormStatus = $_POST['repeaterFormStatus'];
		$id = 1;

		$error = array();

		if (empty($nextDate)) {
			$error['nextDate'] = "日付を入力";
		}

		if (empty($nextNumber)) {
			$error['nextNumber'] = "次回のDojoの回数を入力";
		}

		if (empty($error)) {
			
			//データベースにアクセス
			//アップデート

			require_once './functions.php';
			$dbh = dbCon();

			//アップデート処理
			$sql = "UPDATE webControll SET nextDojoDate = ?, nextDojoNumber = ?, firstFormStatus = ?, repeaterFormStatus = ? where id = ?";
  			$stmt = $dbh->prepare($sql);		
			$result = $stmt->execute(array($nextDate, $nextNumber, $firstJoinFormStatus, $repeaterFormStatus, $id));


		}

	}

	require_once 'functions.php';
	$dbh = dbCon();

	$sql = "SELECT * from webControll where id = 1";
	$stmt = $dbh -> prepare($sql);
	$stmt->execute(array(":userID"=>$userID));
	$dbResult = $stmt->fetchAll();

?>


<!DOCTYPE html>
<html lang="ja">
<head>
	<meat charset="UTF-8">
	<title>CDKWebサイトコントロールパネル</title>
	<link rel="stylesheet" type="text/css" href="style/conpane.css">
</head>

<body>
	<div id="header">
		<h1>CDK Webサイト コントロールパネル</h1>
	</div>
	
	<div id="main">

		<p><?php print($dbResult[0]['lastUpdate']);?></p>

		<form action="" method="POST">

			<p class="title">次回のDojo：
				<input type="text" name="nextDojoDate" value="<?php echo($dbResult[0]['nextDojoDate']); ?>">
			</p>

			<p class="title">次回のDojoの回数：
				<input type="text" name="nextDojoNumber" value="<?php echo($dbResult[0]['nextDojoNumber'])?>">

			<p class="title">
				初参加者フォーム：
				<input type="radio" name="firstJoinFormStatus" value="0" <?php if ($dbResult[0]['firstFormStatus'] == 0) { print("checked"); } ?>>OPEN
				<input type="radio" name="firstJoinFormStatus" value="1" <?php if ($dbResult[0]['firstFormStatus'] == 1) { print("checked"); } ?>>CLOSE（１週間前まで）
				<input type="radio" name="firstJoinFormStatus" value="2" <?php if ($dbResult[0]['firstFormStatus'] == 2) { print("checked"); } ?>>CLOSE（定員オーバー）
			</p>

			<p class="title">
				リピーターフォーム：
				<input type="radio" name="repeaterFormStatus" value="0" <?php if ($dbResult[0]['repeaterFormStatus'] == 0) {
					print("checked");
				} ?>>OPEN
				<input type="radio" name="repeaterFormStatus" value="1" <?php if ($dbResult[0]['repeaterFormStatus'] == 1) {
					print("checked");
				} ?>>CLOSE（1週間前まで）
				<input type="radio" name="repeaterFormStatus" value="2" <?php if ($dbResult[0]['repeaterFormStatus'] == 2) {
					print("checked");
				} ?>>CLOSE（定員オーバー）
			</p>

			<br>

			<input type="hidden" name="flag" value="1">
			<input type="submit" value="更新する">

		</form>
	</div>

	<div id="footer">

	</div>

</body>