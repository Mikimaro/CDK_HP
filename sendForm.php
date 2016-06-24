<?php
	
	session_start();

	$flag = $_SESSION['flag'];

	if ($flag == 1) {
		$childName = $_SESSION['childName'];
	    $kana = $_SESSION['kana'];
	    $grade = $_SESSION['age'];
	    $parentName = $_SESSION['parentName'];
		$mail = $_SESSION['mail'];
		$schoolName = $_SESSION['schoolName'];
		$joined = $_SESSION['bygone'];
		$place = $_SESSION['place'];
		$pcRent = $_SESSION['pc'];
		$option = $_SESSION['comment'];


		//メール送信の処理
		define('DOJO_MAIL', 'join@coderdojo-kashiwa.com');
		define('DOJO_GMAIL', 'coderdojo.kashiwa@gmail.com');
		
		$date = date(n)."月".date(j)."日".date(G)."時".date(s)."分";

		$sendMessage = "この度はCoderDojo Kashiwaにお申し込み頂きまして、誠にありがとうございます。\n以下の情報でお申し込みを承りました。\nお名前：{$childName}\nよみがな：{$kana}\n学年：{$grade}\n保護者様お名前：{$parentName}\nメールアドレス：{$mail}\n学校名：{$schoolName}\n参加区分：{$joined}\nコンピュータの貸出希望：{$pcRent}\nDojoをどこで知ったか：{$place}\n備考：{$option}\n\nまた、当日までにキャンセルをされる場合は、 cancel@coderdojo-kashiwa.com までご一報ください。\nそれでは、当日お会いできることを楽しみにしています。";
		
		//参加者へのリマインドメール
		mail($mail, "CoderDojo Kashiwa 申し込み確認メール", $sendMessage, "From:".DOJO_MAIL);

		$sendMessageForDojo = "お名前：{$childName}\nよみがな：{$kana}\n学年：{$grade}\n保護者様お名前：{$parentName}\nメールアドレス：{$mail}\n学校名：{$schoolName}\n参加区分：{$joined}\nコンピュータの貸出希望：{$pcRent}\nDojoをどこで知ったか：{$place}\n備考：{$option}\n\n";
		//DojoGmailへのリマインドメール
		mail(DOJO_GMAIL, "【新規申し込みがあります】", $sendMessageForDojo, "From:".DOJO_MAIL);


		//データベースに登録する処理
		require_once 'functions.php';
		
		$dbh = dbCon();
		$sql = "INSERT INTO setData(setDate, childName, kana, age, schoolName, parentName, mail, bygone, pc, place, comment) values (now(), ?,?,?,?,?,?,?,?,?,?)";
		$stmt = $dbh->prepare($sql);
		$flag = $stmt->execute(array($childName, $kana, $grade, $schoolName, $parentName, $mail, $joined, $pcRent, $place, $option)); 

		require_once 'header.php';


	}else{
		header("Location index.php");
	}

?>

<div id="container">
	<div id="formCheck">
		<h1 class="headline">お申し込みありがとうございます。</h1>
		<p class="center">
			以下の情報でお申し込みを承りました。当日お会いできるのを楽しみにしております。
		</p>

		<table border="1" class="resultTable">
			<tr><td class="fTdL">お名前</td><td class="fTdR"><?php echo($childName);?></td></tr>
			<tr><td class="fTdL">ふりがな</td><td class="fTdR"><?php echo($kana); ?></td></tr>
			<tr><td class="fTdL">学年</td><td class="fTdR"><?php echo($grade); ?></td></tr>
			<tr><td class="fTdL">ご父母氏名</td><td class="fTdR"><?php echo($parentName);?></td></tr>
			<tr><td class="fTdL">メールアドレス</td><td class="fTdR"><?php echo($mail);?></td></tr>
			<tr><td class="fTdL">学校名</td><td class="fTdR"><?php echo($schoolName);?></td></tr>
			<tr><td class="fTdL">参加区分</td><td class="fTdR"><?php echo($joined);?></td></tr>
			<tr><td class="fTdL">どこで知ったか</td><td class="fTdR"><?php echo($place);?></td></tr>
			<tr><td class="fTdL">PC貸出の有無</td><td class="fTdR"><?php echo($pcRent);?></td></tr>
			<tr><td class="fTdL">その他</td><td class="fTdR"><?php echo($option);?></td></tr>
		</table>

	</div>
</div>

<?php
	require_once 'footer.php';
?>

