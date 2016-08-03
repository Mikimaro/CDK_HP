<?php
	require_once 'header.php';

	$titleList = array(
			"CoderDojoとは",
			"柏の葉Dojo",
			"参加する",
			"RTDとは",
			"メンター",
			"イベント"
		);

	$textList = array(
			$aboutTextList,

		);

	$aboutTextList = array(
			"CoderDojo Foundation",
			"CoderDojo Japan",
			"CoderDojo Kashiwa-no-ha",
			"ScratchDay in Kashiwa",
			"OnlineDojo"
		);

	$kashiwanohaTextList = array(
			"お申し込み"
		);

	$joinTextList = array(
			"はじめて参加する子向けのフォーム",
			"リピーターの子向けフォーム"
		);

	$rtdTextList = array(
			"作品紹介"			
		);

	$mentorTextList = array(
			"メンター募集"
		);

	$eventTextList = array(
			"ScratchDay in Kashiwa 2016",
			"Special Presentation Day 2015",
			"June Conference 2015",
			"Special Presentation Day 2014"
		);

	


	$aboutLinkList = array(
			"http://coderdojo.com",
			"http://coderdojo.jp",
			"http://coderdojo-kashiwa.com/kashiwanoha.php",
			"http://sd.coderdojo-kashiwa.com",
			"http://onlinedojo.coderdojo-kashiwa.com"
		);

	$



?>

<div id="container">

	<div id="sitemap">
		
		<div class="pageTitle">
			<img src="./image/dojoLogo.png" class="headerLogo">
			<h1 class="headline">サイトマップ</h1>

			<p class="title"><a href="./about.php">CoderDojoとは</a></p>
			
			<?php
				for ($i=0; $i < count($titleList); $i++) { 
					print(arg)
				}
			?>

		</div>

	</div>

</div>

<?php
	require_once 'footer.php';
?>