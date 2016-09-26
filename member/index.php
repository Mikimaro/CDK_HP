<?php
	
	$pageTitle = "CDK Members.";
	$pageDescription = "CoderDojo Kashiwa メンバーのためのページです。";

	$dateFlag = true;

	require_once 'header.php';
?>

	<div id="main">

		<div id="lost">
			<a href="./lost.php" class="contentsLink">
				<img src="./image/lost.png" class="mainImg">
				<p class="mainTitle">忘れ物</p>
				<p class="mainText">Dojoに忘れ物をした方はこちらから一覧を確認してください。</p>
			</a>
		</div>

		<div id="message">
			<a href="./message.php" class="contentsLink">
				<img src="./image/message.png" class="mainImg">
				<p class="mainTitle">お知らせ</p>
				<p class="mainText">CoderDojo Kashiwaより参加者の皆さんへのお知らせです。</p>
			</a>
		</div>

		<div id="code">
			<a href="./code.php" class="contentsLink">
				<img src="./image/code.png" class="mainImg">
				<p class="mainTitle">プログラム</p>
				<p class="mainText">Dojoで保管しているプログラムは、こちらからダウンロードできます</p>
			</a>
		</div>

		<div id="file">
			<a href="./file.php" class="contentsLink">
				<img src="./image/clip.png" class="mainImg">
				<p class="mainTitle">配布ファイル</p>
				<p class="mainText">Dojoでお伝えした配布ファイルのダウンロードはこちらから</p>
			</a>
		</div>


	</div>

<?php require_once 'footer.php'; ?>
