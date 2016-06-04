<?php
							$class = array(
								'sdk2016',
								'spd2015',
								'jc2015',
								'spd2014'

								);
							$img = array(
								'./image/eventLogos/sdk2016.png',
								'./image/eventLogos/spd2015.png',
								'./image/eventLogos/jc2015.png',
								'./image/eventLogos/spd2014.png'
								);

							$title = array(
								'ScratchDay 2016 in Kashiwa',
								'Special Presentation Day 2015',
								'June Conference 2015',
								'Special Presentation Day 2014'
								);

							$day = array(
								'2016.05.14',
								'2015.12.20',
								'2015.06.07',
								'2014.12.21'
								);

							$site = array(
								'@東京大学柏の葉キャンパス',
								'@KOILスタジオ',
								'@NoblesseOblige',
								'@NoblesseOblige'
								);

							$comments = array(
								'ScratchDay初の柏開催。',
								'イノベーションラボ柏の葉KOILでの子供たちのための作品発表会',
								'CoderDojo Kashiwaで初の技術的な発表会',
								'CoderDojo Kashiwaで初の子供たちのための作品発表会'
								);

							$URL = array(
								'http://www.coderdojo-kashiwa.com/ScratchDay/',
								'event/spd/2015',
								'event/jc/2015',
								'event/spd/2014'
							);
	require_once 'header.php';
?>

<div id="container">

	<div id="event">
		
		<div class="pageTitle nonImg">

			<h1 class="headline">Special Events</h1>

		</div>

		<div class="events">

			<h3 class="headline">最新のイベントを紹介します。</h3>

			<?php
			for ($i=0; $i < 1; $i++) { 
							print("<div class='party'>
									<article class='latest-Article'>
										<div>
											<img src='{$img[$i]}' class='{$class[$i]}'>
											<div class='eventText'>
												<h2>{$title[$i]}</h2>
												<h3>{$day[$i]}</h3>
												<h4>{$site[$i]}</h4>
												<h5>{$comments[$i]}</h5>
												<a href='{$URL[$i]}' class='readMore'>より詳しく</a>
											</div>
										</div>
									</article>
									</div>");
						}
					?>

		</div>

		<div class="events">
			<a id=x"pastEvent"></a>
			<h3 class="headline">過去のイベントを紹介します。</h3>

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
												<a href='{$URL[$i]}' class='readMore'>より詳しく</a>
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