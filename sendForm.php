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

