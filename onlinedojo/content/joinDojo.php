<?php require_once './common/header.php'; ?>

<?php
	$nextDojo = array("51");
	$nextDate = array("2016年1月10日");

	$inputflag = $_POST['inputflag'];

	if ($inputflag == 1) {
		require_once '../common/functions.php';
		$dbh = joinDojoCon();

		$sql = "INSERT INTO setData(setDate, childName) values (now(), ?)";
		$stmt = $dbh->prepare($sql);
		$flag = $stmt->execute(array($userName));

		$dbh = null;
	
		if ($flag == true) {
			$dojoMail = 'join@coderdojo-kashiwa.com';
			
			mail("coderdojo.kashiwa@gmail.com", "新規申し込みがありました", "新規申し込みがありました。\n\n【{$userName}】さんから\n\n(from OnlineDojo)\n\n---\nここから確認して下さい\n\nwww.mjk0329.sakura.ne.jp/cdkPass/index.php\n\n", "From:".$dojoMail);

			print("<script>alert('申し込みが完了しました');</script>");
		}
	}
?>
	
	<div id="post">
		<img src="./img/img01.png" onclick="goIndex()">
		<div class="htmlcontent">
			<h1>CoderDojoに参加する</h1>
				<p>次回のCoderDojo Kashiwaは...</p>
				<p>第<?php print($nextDojo[0]); ?>回（<?php print($nextDate[0]); ?>）</p>
				<br>
				<form action="" method="POST">
					<input type="hidden" name="inputflag" value="1">
					<input type="submit" value="参加する">
				</form>
				<p>※参加確認メールは送信されません</p>
		</div>
	</div>

	<div id="margin">
		<p>Join Dojo</p>
	</div>

<?php require_once './common/footer.html'; ?>
