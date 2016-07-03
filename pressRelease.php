<?php
	require_once 'header.php';

	$date = array(
		"2016.07.03",
		"2016.03.27"
	);

	$title = array(
		"ホームページをリニューアル",
		"2016年度を迎えるにあたってのお知らせ"
	);

	$text = array(
		"CoderDojo Kashiwaのホームページをリニューアルしました。",
		"2016年度よりCoderDojo Kashiwaの運営体制を変更します。詳しくは、<a href='./news'>こちら</a>をご覧ください"
	);

?>

<div id="container">

	<div id="pageTitle">
		<img src="./image/dojoLogo.png" class="headerLogo">
		<h1 class="headline">プレスリリース</h1>
		<p class="headline">CoderDojo Kashiwaから皆様への重要なお知らせです</p>
	</div>

	<div id="pressRelease">

		<?php 
			for ($i=0; $i < count($title); $i++) { 
				print("
					<div class='pContents'>
						<div class='pText'>
							<p class='pDate'>{$date[$i]}発表</p>
							<p class='pTitle'>{$title[$i]}</p>
							<p class='text'>{$text[$i]}</p>
						</div>
					</div>
				");
			}
		?>

	</div>

</div>

<?php
	require_once 'footer.php';