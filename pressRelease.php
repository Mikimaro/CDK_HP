<?php
	require_once 'header.php';

	$date = array(
		"2016.03.27"
	);

	$title = array(
		"2016年度を迎えるにあたってのお知らせ"
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
						</div>
					</div>
				");
			}
		?>

	</div>

</div>

<?php
	require_once 'footer.php';