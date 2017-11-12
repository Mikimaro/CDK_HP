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
		$times = $_SESSION['num'];

		//データベースに登録する処理
		require_once 'functions.php';
		//ここでもし該当回数にpostされてたら弾く
		$dbh = dbCon();

		$sql = "SELECT * from setData where childName = ? AND times = ?";
		$stmt = $dbh -> prepare($sql);
		$stmt->execute(array($childName, $times));
		$user = $stmt->fetchAll(PDO::FETCH_ASSOC);

		if(count($user) == 0){

			$joined = "yes";
			
			if ($pcRent == "希望する") {
				$pcRent = "yes";
			}else{
				$pcRent = "no";
			}

			//データベース登録処理
			$sql = "INSERT INTO setData(setDate, childName, kana, age, schoolName, parentName, mail, bygone, pc, place, comment, times) values (now(), ?,?,?,?,?,?,?,?,?,?,?)";
			$stmt = $dbh->prepare($sql);
			$flag = $stmt->execute(array($childName, $kana, $grade, $schoolName, $parentName, $mail, $joined, $pcRent, $place, $option, $times)); 
	
			//slckの処理
			if ($pcRent == "yes") {
				$pcRentSlack = "PC貸出希望";
			}else{
				$pcRentSlack = "PC持参";
			}
	
			$joinedSlack = "リピーター";
	
			//Slackに投げる処理	
			$slackApiKey = 'xoxp-16884381670-16884222903-76227069687-48b28abeeb';
			$text = "第{$times}回 - {$childName} / {$grade} / {$joinedSlack} / {$pcRentSlack} /  ";
			$text = urlencode($text);
			$url = "https://slack.com/api/chat.postMessage?token=${slackApiKey}&channel=%23new_register&text=${text}&as_user=false";
			file_get_contents($url);

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

			

			$isPosted = false;

		}else{
			//すでに申し込みがされている
			$error["already_posted"] = "すでに申し込みがされています";

			$isPosted = true;
		}

		require_once 'header.php';


	}else{
		header("Location index.php");
	}

?>

<div id="container">
	<div id="formCheck">

<?php

if($isPosted){
print<<<EOF
	<h1 class="headline">すでに申し込まれています。</h1>
	<p class="center">
		すでにお申込みされています。
	</p>
EOF;
}else{

print<<<EOF

		<h1 class="headline">お申し込みありがとうございます。</h1>
		<p class="center">
			以下の情報でお申し込みを承りました。当日お会いできるのを楽しみにしております。
		</p>

		<table border="1" class="resultTable">
			<tr><td class="fTdL">お名前</td><td class="fTdR">{$childName}</td></tr>
			<tr><td class="fTdL">ふりがな</td><td class="fTdR">{$kana}</td></tr>
			<tr><td class="fTdL">学年</td><td class="fTdR">{$grade}</td></tr>
			<tr><td class="fTdL">ご父母氏名</td><td class="fTdR">{$parentName}</td></tr>
			<tr><td class="fTdL">メールアドレス</td><td class="fTdR">{$mail}</td></tr>
			<tr><td class="fTdL">学校名</td><td class="fTdR">{$schoolName}</td></tr>
			<tr><td class="fTdL">参加区分</td><td class="fTdR">{$joined}</td></tr>
			<tr><td class="fTdL">どこで知ったか</td><td class="fTdR">{$place}</td></tr>
			<tr><td class="fTdL">PC貸出の有無</td><td class="fTdR">{$pcRent}</td></tr>
			<tr><td class="fTdL">その他</td><td class="fTdR">{$option}</td></tr>
		</table>

EOF;
}
?>
		<a href="./join.php" class="button">申し込みページへ</a>


	</div>
</div>

<?php
	require_once 'footer.php';
?>

