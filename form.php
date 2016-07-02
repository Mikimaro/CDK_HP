<?php
	$flag = $_POST['flag'];

			

	if ($flag == 1) {

		$name = htmlspecialchars($_POST['childName']);
		$kana = "-";
		$grade = htmlspecialchars($_POST['grade']);
		$schoolName = "-";
		$parentName = "-";
		$mail = htmlspecialchars($_POST['mail']);
		$pcRent = htmlspecialchars($_POST['pcRent']);
		$joined = htmlspecialchars('既に来たことがある');
		$why = "-";
		$option = htmlspecialchars($_POST['option']);

		$error = array();

		if (empty($name)) {
			$error['childName'] = "お子様のお名前を入力してください";
		}

		if (empty($grade)) {
			$error['grade'] = "学年を選択してください";
		}

		if (empty($mail)) {
			$error['mail'] = "連絡がとれるメールアドレスを入力してください";
		}

		if (empty($pcRent)) {
			$error['pcRent'] = "PC貸出の有無を選択してください";
		}

		if (empty($error)) {
			
			session_start();

			$_SESSION['flag'] = 1;
			$_SESSION['childName'] = $name;
      		$_SESSION['kana'] = $kana;
     		$_SESSION['age'] = $grade;
     		$_SESSION['parentName'] = $parentName;
		    $_SESSION['mail'] = $mail;
		    $_SESSION['schoolName'] = $schoolName;
		    $_SESSION['bygone'] = $joined;
		    $_SESSION['place'] = $why;
		    $_SESSION['pc'] = $pcRent;
		    $_SESSION['comment'] = $option;

		    header('Location: sendForm.php');
			
		}
		
	}

	require_once 'header.php';

?>

<div id="container">
	
	<div class="pageTitle nonImg">

		<h1 class="headline">参加申し込みフォーム</h1>

		<p class="headline">

			こちらのフォームは既にCoderDojo Kashiwaに参加している方用のフォームです。
			
		</p>

		<p class="formAttention ">上限に達した時点で予約不可となっております。</p>

	</div>

	<div id="join">

		<form action="" method="POST">

			<div class="individual title-of-top">

			<p class="formTitle">お名前</p>
				<p class="errorMsg"><?php print($error['childName']);?></p>
				<input type="text" name="childName" class="textBox">

			<p class="formTitle">学年</p>
				<p class="errorMsg"><?php print($error['grade']);?></p>
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

			<p class="formTitle">メールアドレス</p>
				<p class="errorMsg"><?php print($error['mail']);?></p>
				<input type="text" name="mail" class="textBox">

			<p class="formTitle">ノートパソコンの貸出を希望しますか？</p>
				<p class="errorMsg"><?php print($error['pcRent']);?></p>
				<input type="radio" name="pcRent" value="希望する" checked="">希望する
				<input type="radio" name="pcRent" value="希望しない">希望しない

			<p class="formTitle">備考（あらかじめ伝えておきたいこと）</p>
				<textarea cols="50" rows="10" name="option"></textarea>

				<input type="hidden" name="flag" value="1">

				<div class="space"><input type="submit" value="申し込む"></div>

			</div>
		</form>

	</div>

</div>

<?php
	require_once 'footer.php';
?>