<?php  

	$SponsorName = array(


		'東京大学空間情報科学研究センター',
		'CoderDojo Kashiwa',
		'CoderDojo Kashiwa-no-ha',
		'CoderDojo Nagareyama',
		'Code for NAGAREYAMA',
		'柏タイムズ'

		);


?>

<!DOCTYPE html>
<html>
<head>
	<title>主催・共催・参加・後援団体一覧</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<div id="header">

		<img src="image/scratch-day-logo-alpha.png" class="headerImg">

	</div>

	<div id="contents">

		<nav>
			
			<p>

				<a href="index.html">メインページ</a> > 主催・共催・参加・後援団体一覧 

			</p>

		</nav>

		<section class="sponsorContents">

			<div class="details">

				<p class="title">主催・共催・参加・後援団体一覧</p>

				<div>

					<?php
					
						for ($i=0; $i <count($SponsorName) ; $i++) { 

							print("

								<ul class='sponsorName listNone'><li>{$SponsorName[$i]}</li></ul>

							");
						}

					?>

					<p class="random">順不同・敬称省略</p>

				</div>

			</div>

		</section>

	</div>

	<div id="footer">

		<p class="footerTxt">Copyright(c) ScratchDay 2016 in Kashiwa</p>
		
	</div>

</body>
</html>