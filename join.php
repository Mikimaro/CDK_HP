<?php

	$flag = $_POST['flag'];

	if ($flag == 1) {

		$name = htmlspecialchars($_POST['userName']);
		$kana = htmlspecialchars($_POST['kana']);
		$grade = htmlspecialchars($_POST['grade']);
		$schoolName = htmlspecialchars($_POST['schoolName']);
		$parentName = htmlspecialchars($_POST['parentName']);
		$mail = htmlspecialchars($_POST['mail']);
		$pcRent = htmlspecialchars($_POST['pcRent']);
		$joined = htmlspecialchars($_POST['joined']);
		$why = htmlspecialchars($_POST['why']);
		$option = htmlspecialchars($_POST['option']);

		$error = array();

		if (empty($name)) {
			
		}
		
	}else{
		require_once 'header.php';
	}
	

?>

<div id="container">

	<div class="pageTitle nonImg">

		<h1 class="headline">参加申し込みフォーム</h1>

		<p class="headline">

			CoderDojo Kashiwa に参加される場合はこちらのフォームからのお申し込みをお願いしております。
			
		</p>

		<p class="formAttention ">上限に達した時点で予約不可となっております。</p>

	</div>

	<div id="join">

		<form action="" method="POST">

			<div class="individual title-of-top">

			<p class="formTitle">お名前</p>
				<input type="text" name="userName" class="textBox">

			<p class="formTitle">ふりがな</p>
				<input type="text" name="kana" class="textBox">

			<p class="formTitle">学年</p>
				<select name="grade">
					<?php
						for ($i=1; $i < 7; $i++) { 
							print("<option value='小学{$i}年生'>小学{$i}年生</option>");
						}

						for ($i=1; $i < 4; $i++) { 
							print("<option value='中学{$i}年生'>中学{$i}年生</option>");
						}
					?>
					<option value="その他">その他</option>
				</select>

			<p class="formTitle">学校名</p>
				<input type="text" class="schoolName" class="textBox">

			<p class="formTitle">保護者氏名</p>
				<input type="text" name="parentName" class="textBox">

			<p class="formTitle">メールアドレス</p>
				<input type="text" name="mail" class="textBox">

			<p class="formTitle">ノートパソコンの貸出を希望しますか？</p>
				<input type="radio" name="pcRent" value="はい" checked="">はい
				<input type="radio" name="pcRent" value="いいえ">いいえ
			
			<p class="formTitle">CoderDojo Kashiwaに参加されるのは初めてですか？</p>
				<input type="radio" name="joined" value="はい" checked="">はい
				<input type="radio" name="joined" value="いいえ">いいえ
			
			<p class="formTitle">当Dojoをどこでお知りになりましたか？</p>
				<input type="radio" name="why" value="Webページ">Webページ<br>
				<input type="radio" name="why" value="SNS">SNS<br>
				<input type="radio" name="why" value="知人・友人からの紹介">知人・友人からの紹介<br>
				<input type="radio" name="why" value="メディア">メディア<br>
				<input type="radio" name="why" value="すでに参加している">すでに参加している<br>
				<input type="radio" name="why" value="その他">その他
			
			<p class="formTitle">備考（あらかじめ伝えておきたいこと）</p>
				<textarea cols="80" rows="10"></textarea>

				<div class="space"><input type="submit" value="申し込む"></div>

			</div>
		</form>

	</div>


	

</div>

<?php
	require_once 'footer.php';
?>
