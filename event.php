<?php
							$class = array(
								'spd2016',
								'sdk2016',
								'spd2015',
								'jc2015',
								'spd2014'

								);
							$img = array(
								'./image/eventLogos/spd2016.png',
								'./image/eventLogos/sdk2016.png',
								'./image/eventLogos/spd2015.png',
								'./image/eventLogos/jc2015.png',
								'./image/eventLogos/spd2014.png'
								);

							$title = array(
								'Special Presentation Day 2016',
								'ScratchDay 2016 in Kashiwa',
								'Special Presentation Day 2015',
								'June Conference 2015',
								'Special Presentation Day 2014'
								);

							$day = array(
								'2016.12.24',
								'2016.05.14',
								'2015.12.20',
								'2015.06.07',
								'2014.12.21'
								);

							$site = array(
								'@KOILスタジオ',
								'@東京大学柏の葉キャンパス',
								'@KOILスタジオ',
								'@NoblesseOblige',
								'@NoblesseOblige'
								);

							$comments = array(
								'作品発表会',
								'MITメディアラボが開発したScratchのお祭りを柏で初めて開催',
								'柏の葉オープンイノベーションラボKOILでの子どもたちによる作品発表会',
								'新しい受付システムの導入、家庭での学習を促進するOnlineDojo、ホームページのリニューアル、Kashiwa-no-haDojoの設立を発表',
								'CoderDojo Kashiwaで初の子どもたちによる作品発表会'
								);

							$URL = array(
								'event/spd/2016',
								'event/ScratchDay/',
								'event/spd/2015',
								'event/jc/2015',
								'event/spd/2014'
							);
	require_once 'header.php';
?>

<div id="container">

	<div id="event">
		
		<div class="pageTitle">
			<img src="./image/dojoLogo.png" class="headerLogo">
			<h1 class="headline">Special Events</h1>

			<p class="headline">CoderDojo Kashiwaのイベントを紹介します</p>

		</div>

		<div class="events">

			<h3 class="headline">最新のイベント</h3>

			<?php
				for ($i=0; $i < 1; $i++) { 
					print("<div class='party'>
							<article class='latest-Article'>
								<div>
									<img src='{$img[$i]}' class='{$class[$i]}'>
									<div class='eventText lastest'>
										<h2>{$title[$i]}</h2>
										<h3>{$day[$i]}</h3>
										<h4>{$site[$i]}</h4>
										<h5>{$comments[$i]}</h5>
										<a href='{$URL[$i]}' class='readMore'>さらに詳しく</a>
									</div>
								</div>
							</article>
							</div>");
				}
			?>

		</div>

		<div class="events">
			<a id=x"pastEvent"></a>
			<h3 class="headline">過去のイベント</h3>

				<div class="event-list clearfix"> 

					<?php

						for ($i=1; $i < count($title); $i++) { 
							print("<div class='party'>
									<article class='mainArticle'>
										<div>
											<img src='{$img[$i]}' class='{$class[$i]}'>
											<div class='eventText'>
												<h2>{$title[$i]}</h2>
												<h3>{$day[$i]}</h3>
												<h4>{$site[$i]}</h4>
												<h5>{$comments[$i]}</h5>
												<a href='{$URL[$i]}' class='readMore'>さらに詳しく</a>
											</div>
										</div>
									</article>
									</div>");
						}

					?>
					
				</div>
			
		</div>

	</div>

</div>

<?php
	require_once 'footer.php';
?>