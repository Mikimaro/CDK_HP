<?php
	
	session_start();

	$flag = $_SESSION['flag'];

	if ($flag == 1) {

		//DBからもってくる

		require_once 'functions.php';

		$dbh = dbCon(); 

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
		$times = $_SESSION['num'];

		//メール送信の処理
		define('DOJO_MAIL', 'join@coderdojo-kashiwa.com');
		define('DOJO_GMAIL', 'coderdojo.kashiwa@gmail.com');
		
		$date = date(n)."月".date(j)."日".date(G)."時".date(s)."分";

		$sendMessage = "
			この度はCoderDojo Kashiwaにお申し込み頂きまして、誠にありがとうございます。\n以下の情報でお申し込みを承りました。\nお名前：{$childName}\nよみがな：{$kana}\n学年：{$grade}\n保護者様お名前：{$parentName}\nメールアドレス：{$mail}\n学校名：{$schoolName}\n参加区分：{$joined}\nコンピュータの貸出希望：{$pcRent}\nDojoをどこで知ったか：{$place}\n備考：{$option}\n\n会場は柏駅東口のNoblesseObligeというコワーキングスペースです。\nhttp://nbob.jp\n\nまた、当日までにキャンセルされる場合は、 cancel@coderdojo-kashiwa.com までご一報ください。\nそれでは、当日お会いできることを楽しみにしています。";
		//参加者へのリマインドメール
		mail($mail, "CoderDojo Kashiwa 申し込み確認メール", $sendMessage, "From:".DOJO_MAIL);

		$sendMessageForDojo = "
			お名前：{$childName}\nよみがな：{$kana}\n学年：{$grade}\n保護者様お名前：{$parentName}\nメールアドレス：{$mail}\n学校名：{$schoolName}\n参加区分：{$joined}\nコンピュータの貸出希望：{$pcRent}\nDojoをどこで知ったか：{$place}\n備考：{$option}\n\n";
		//DojoGmailへのリマインドメール
		mail(DOJO_GMAIL, "【新規申し込みがあります】", $sendMessageForDojo, "From:".DOJO_MAIL);

		$joined = "no";

		if ($pcRent == "希望する") {
			$pcRent = "yes";
		}else{
			$pcRent = "no";
		}

		

		$sql = "INSERT INTO setData(setDate, childName, kana, age, schoolName, parentName, mail, bygone, pc, place, comment, times) values (now(), ?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $dbh->prepare($sql);
		$flag = $stmt->execute(array($childName, $kana, $grade, $schoolName, $parentName, $mail, $joined, $pcRent, $place, $option, $times)); 

		if ($pcRent == "yes") {
			$pcRentSlack = "PC貸出希望";
		}else{
			$pcRentSlack = "PC持参";
		}

		$joinedSlack = "初参加";

		//Slackに投げる処理	
		$slackApiKey = 'xoxp-16884381670-16884222903-76227069687-48b28abeeb';
		
		$text = "第{$times}回 - {$childName} / {$grade} / {$joinedSlack} / {$pcRentSlack} /  ";
		$text = urlencode($text);
		$url = "https://slack.com/api/chat.postMessage?token=${slackApiKey}&channel=%23new_register&text=${text}&as_user=false";
		file_get_contents($url);


		require_once 'header.php';

	}else{
		header("Location index.php");
	}

?>

<div id="container">
	<div id="formCheck">
		<h1 class="headline">お申し込みありがとうございます。</h1>
		<p class="text">
			以下の情報でお申し込みを承りました。当日お会いできるのを楽しみにしております。
		</p>

		<table border="1" class="resultTable">
			<tr><td>お名前</td><td><?php echo($childName);?></td></tr>
			<tr><td>ふりがな</td><td><?php echo($kana); ?></td></tr>
			<tr><td>学年</td><td><?php echo($grade); ?></td></tr>
			<tr><td>ご父母氏名</td><td><?php echo($parentName);?></td></tr>
			<tr><td>メールアドレス</td><td><?php echo($mail);?></td></tr>
			<tr><td>学校名</td><td><?php echo($schoolName);?></td></tr>
			<tr><td>参加区分</td><td><?php echo($joined);?></td></tr>
			<tr><td>どこで知ったか</td><td><?php echo($place);?></td></tr>
			<tr><td>PC貸出の有無</td><td><?php echo($pcRent);?></td></tr>
			<tr><td>その他</td><td><?php echo($option);?></td></tr>
		</table>

	</div>
</div>

<?php
	require_once 'footer.php';
?>

