<?php
	require_once 'header.php';
?>

<div id="container">

	<div id="event">
		
		<div id="pageTitle">

			<img src="#"  class="headerLogo" alt="">

			<h1 class="headline">Special Events</h1>

		</div>

		<div class="events">

			<h3 class="headline">最新のイベントを紹介します。</h3>

				<div class='party'>

					<article class='latest-article'>

						<div>

							<img src='' class='latestImg'>

							<div class='eventText'>

								<h2></h2>

								<h3></h3>

								<h4></h4>

								<h5></h5>

								<a href='' class='readMore'>より詳しく</a>

							</div>

						</div>

					</article>

				</div>

		</div>

		<div class="events">

			<h3 class="headline">過去のイベントを紹介します。</h3>

				<div class="event-list clearfix"> 

					<?php

						$class = array(
							'spd2015',
							'jc2015',
							'spd2014'

							);
						$img = array(
							'./image/eventLogos/spd2015.png',
							'./image/eventLogos/jc2015.png',
							'./image/eventLogos/spd2014.png'
							);

						$title = array(
							'Special Presentation Day 2015',
							'June Conference 2015',
							'Special Presentation Day 2014'
							);

						$day = array(
							'2015.12.20',
							'2015.06.07',
							'2014.12.21'
							);

						$site = array(
							'@KOILスタジオ',
							'@NoblesseOblige',
							'NoblesseOblige'
							);

						$comments = array(
							'イノベーションラボ柏の葉KOILでの子供たちのための作品発表会',
							'CoderDojo Kashiwaで初の技術的な発表会',
							'CoderDojo Kashiwaで初の子供たちのための作品発表会'
							);

						$URL = array(
							'#',
							'#',
							'#'
							);

						for ($i=0; $i < count($title); $i++) { 
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