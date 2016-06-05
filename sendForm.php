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

		$sendMessage = "
			この度はCoderDojo Kashiwaにお申し込み頂きまして、誠にありがとうございます。\n
			以下の情報でお申し込みを承りました。\n
			お名前：{$childName}\n
			よみがな：{$kana}\n
			学年：{$grade}\n
			保護者様お名前：{$parentName}\n
			メールアドレス：{$mail}\n
			学校名：{$schoolName}\n
			参加区分：{$joined}\n
			コンピュータの貸出希望：{$pcRent}\n
			Dojoをどこで知ったか：{$place}\n
			備考：{$option}\n\n

			それでは、当日お会いできることを楽しみにしています。

		";
		//参加者へのリマインドメール
		mail($mail, "CoderDojo Kashiwa 申し込み確認メール", $sendMessage, "From:".DOJO_MAIL);

		$sendMessageForDojo = "
			お名前：{$childName}\n
			よみがな：{$kana}\n
			学年：{$grade}\n
			保護者様お名前：{$parentName}\n
			メールアドレス：{$mail}\n
			学校名：{$schoolName}\n
			参加区分：{$joined}\n
			コンピュータの貸出希望：{$pcRent}\n
			Dojoをどこで知ったか：{$place}\n
			備考：{$option}\n\n
		";

		mail(DOJO_GMAIL, "【新規申し込みがあります】", $sendMessageForDojo, "From".DOJO_MAIL);

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

		<table border="1">
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

