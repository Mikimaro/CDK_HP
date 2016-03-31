<?php

	$flag = $_POST['flag'];

	if ($flag == 1) {

		$name = htmlspecialchars($_POST['userName']);
		$kana = htmlspecialchars($_POST['kana']);
		$grade = htmlspecialchars($_POST['age']);
		$schoolName = htmlspecialchars($_POST['jibName']);
		$mail = htmlspecialchars($_POST['mail']);
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

		<h1 class="headline">メンター応募フォーム</h1>

		<p class="headline">

			CoderDojo Kashiwa のメンターに応募される方はこちらのフォームからのエントリーをお願いしております。
			
		</p>

	</div>

	<div id="adoptForm">

		<form action="" method="POST">

			<div class="individual title-of-top">

			<p class="formTitle">お名前</p>
				<input type="text" name="userName" class="textBox">

			<p class="formTitle">ふりがな</p>
				<input type="text" name="kana" class="textBox">

			<p class="formTitle">年齢</p>
				<select name="age">
					<?php

						for ($i=6; $i < 70; $i++) { 
							print("<option value='{$i}'>{$i}歳</option>");
						}

					?>
				</select>

			<p class="formTitle">ご職業</p>
				<input type="text" class="jobName" class="textBox">

			<p class="formTitle">メールアドレス</p>
				<input type="text" name="mail" class="textBox">

			<p class="formTitle">当Dojoをどこでお知りになりましたか？</p>
				<input type="radio" name="why" value="Webページ">Webページ<br>
				<input type="radio" name="why" value="SNS">SNS<br>
				<input type="radio" name="why" value="知人・友人からの紹介">知人・友人からの紹介<br>
				<input type="radio" name="why" value="メディア">メディア<br>
				<input type="radio" name="why" value="すでに参加している">すでに参加している<br>
				<input type="radio" name="why" value="その他">その他
			
			<p class="formTitle">備考（あらかじめ伝えておきたいこと）</p>
				<textarea cols="50" rows="10"></textarea>

				<div class="space"><input type="submit" value="エントリー"></div>

			</div>
		</form>

	</div>


	

</div>

<?php
	require_once 'footer.php';
?>
