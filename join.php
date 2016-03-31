<?php
	require_once 'header.php';
?>

<div id="container">
	
	<h1 class="text">参加する</h1>

	<div id="join">

		<p class="text">CoderDojo Kashiwa に参加される場合はこちらのフォームからのお申し込みをお願いしております。</p>


		<form action="" method="POST">

			<p>お名前</p>
				<input type="text" name="userName" class="textBox">

			<p>ふりがな</p>
				<input type="text" name="kana" class="textBox">
			<p>学年</p>
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

			<p>学校名</p>
				<input type="text" class="schoolName" class="textBox">

			<p>保護者氏名</p>
				<input type="text" name="parentName" class="textBox">
			<p>メールアドレス></p>
				<input type="text" name="mail" class="textBox">
			<p>ノートパソコンの貸出を希望しますか？</p>
				<input type="radio" name="pcRent" value="はい" checked="">はい
				<input type="radio" name="pcRent" value="いいえ">いいえ
			<p>CoderDojo Kashiwaに参加されるのは初めてですか？</p>
				<input type="radio" name="joined" value="はい" checked="">はい
				<input type="radio" name="joined" value="いいえ">いいえ
			<p>当Dojoをどこでお知りになりましたか？</p>
				<input type="radio" name="why" value="Webページ">Webページ<br>
				<input type="radio" name="why" value="SNS">SNS<br>
				<input type="radio" name="why" value="知人・友人からの紹介">知人・友人からの紹介<br>
				<input type="radio" name="why" value="メディア">メディア<br>
				<input type="radio" name="why" value="すでに参加している">すでに参加している<br>
				<input type="radio" name="why" value="その他">その他
			<p>備考（あらかじめ伝えておきたいこと）</p>
				<textarea cols="50" rows="10"></textarea>

				<input type="submit" value="申し込む">
		</form>

	</div>


	

</div>

<?php
	require_once 'footer.php';
?>
