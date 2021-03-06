<?php
							$img = array(
								'../image/eventLogos/spd2017.png',
								'../image/eventLogos/sdk.png',
								'../image/eventLogos/spd2016.png',
								'../image/eventLogos/sdk.png',
								'../image/eventLogos/spd2015.png',
								'../image/eventLogos/jc2015.png',
								'../image/eventLogos/spd2014.png'
								);

							$title = array(
								'Special Presentation Day 2017',
								'ScratchDay 2017 in Kashiwa',
								'Special Presentation Day 2016',
								'ScratchDay 2016 in Kashiwa',
								'Special Presentation Day 2015',
								'June Conference 2015',
								'Special Presentation Day 2014'
								);

							$day = array(
								'2017.12.23',
								'2017.05.14',
								'2016.12.24',
								'2016.05.14',
								'2015.12.20',
								'2015.06.07',
								'2014.12.21'
								);

							$site = array(
								'@麗澤大学生涯教育プラザ プラザホール',
								'@柏市立柏中学校体育館',
								'@KOILスタジオ',
								'@東京大学柏の葉キャンパス',
								'@KOILスタジオ',
								'@NoblesseOblige',
								'@NoblesseOblige'
								);

							$comments = array(
								'4回目となる成果発表会',
								'昨年、好評を頂いたScratchのお祭りを今年も開催',
								'作品発表会',
								'MITメディアラボが開発したScratchのお祭りを柏で初めて開催',
								'柏の葉オープンイノベーションラボKOILでの子どもたちによる作品発表会',
								'新しい受付システム、家庭での学習を促進するOnlineDojo、ホームページリニューアル、柏の葉Dojoの設立を発表',
								'CoderDojo Kashiwaで初の子どもたちによる作品発表会'
								);

							$URL = array(
								'spd/2017/',
								'http://scratchday-kashiwa.org',
								'spd/2016/',
								'ScratchDay/2016/',
								'spd/2015/',
								'jc/2015/',
								'spd/2014/'
							);
	require_once 'header.php';
?>

<div id="container">
		
		<div class="pageTitle">
			<img src="../image/dojoLogo.png" class="headerLogo">
			<h1 class="headline">Special Events</h1>

			<p class="headline">CoderDojo Kashiwaのイベントを紹介します</p>

		</div>
		
		<div id="event">

		<div class="events">

			<h2 class="headline">最新のイベント</h2>

			<section class="latest-event">

			<?php
				for ($i=0; $i < 1; $i++) { 
					print("

				<article>

					<img src='{$img[$i]}' class='{$class[$i]} img-fluid'>

					<section class='latest-eventText'>

						<h2>{$title[$i]}</h2>
						<h3>{$day[$i]}</h3>
						<h4>{$site[$i]}</h4>
						<h5>{$comments[$i]}</h5>
						<a href='{$URL[$i]}' class='readMore'>さらに詳しく</a>

					</section>

				</article>
					");
				}
			?>

			</section>

			<h2 class="headline">過去のイベント</h2>

			<section class="row">


			<?php

				for ($i=1; $i < count($title); $i++) { 
						print("

				<div class='card col-md-6'>
				
						<img src='{$img[$i]}' class='card-img-top'>

						<section class='card-body'>

							<h2 class='card-title'>{$title[$i]}</h2>
							<h3 class='card-subtitle mb-2 text-muted'>{$day[$i]}</h3>
							<h4 class='card-subtitle mb-2 text-muted'>{$site[$i]}</h4>
							<h5 class='card-text'>{$comments[$i]}</h5>
							<a href='{$URL[$i]}' class='readMore card-link'>さらに詳しく</a>

						</section>

				</div>
						");
					}

				?>

			</section>
			
		</div>

	</div>

</div>

<?php
	require_once 'footer.php';
?>