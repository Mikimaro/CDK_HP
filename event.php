<?php
	require_once 'header.php';
?>

<div id="conteiner">

	<div id="event">
		
		<div id="pageTitle">

			<img src="#"  class="headerLogo" alt="">

			<h1 class="headline">Special Events</h1>

			<div class="past-events">

				<div class="event-list clearfix"> 

					<?php
						$img = array('./image/eventLogos/spd2015.png','./image/eventLogos/jc2015.png','./image/eventLogos/spd2014.png');

						$title = array('Special Presentation Day 2015','June Conference 2015','Special Presentation Day 2014');

						$day = array('2015.12.20','2015.06.07','2014.12.21');

						$site = array('@KOILスタジオ','@NoblesseOblige','NoblesseOblige');

						$comments = array('イノベーションラボ柏の葉KOILでのスペシャルイベント','コメント入力','コメント入力');

						for ($i=0; $i < count($title); $i++) { 
							print("<div>
									<article class='mainArticle'>
										<div>
											<img src='{$img[$i]}' class='eventImg'>
											<div class='eventText'>
												<h2>{$title[$i]}</h2>
												<h3>{$day[$i]}</h3>
												<h4>{$site[$i]}</h4>
												<h5>{$comments[$i]}</h5>
											</div>
										</div>
									</article>
									<article class='mainArticle'>
										<div>
											<img src='{$img[++$i]}' class='eventImg'>
											<div class='eventText'>
												<h2>{$title[$i]}</h2>
												<h3>{$day[$i]}</h3>
												<h4>{$site[$i]}</h4>
												<h5>{$comments[$i]}</h5>
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

</div>

<?php
	require_once 'footer.php';