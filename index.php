<?php
	require_once 'header.php';
?>

<div id="container">

	<div id="contents">

		<div class="flexslider">

			<div class="slides slidefix">

			<?php

				$headClass = array(
						"head001",
						"head002",
						"head003",
						"head004"
					);

				$commentClass = array(
						"comment001",
						"comment002",
						"comment003",
						"comment004"
					);

				$head = array(
						"CoderDojo Kashiwa",
						"参加しやすい環境",
						"日本国内の最大勢力",
						"スペシャルイベントのご案内"
					);

				$comment = array(
						"小中学生向けのプログラミング教室",
						"月2回、千葉県柏市のコワーキングスペース<br>
						「Noblesse Oblige」にて開催<br>
						もちろん参加費は無料です",
						"同じ市内に姉妹Dojoとして<br>
						「CoderDojo Kashiwa-no-ha」をオープン",
						"CoderDojo Kashiwaでは子供たちのための<br>発表の場を定期的に設けています"
					);

				for ($i=0; $i < 4; $i++) { 

					$imgNum = $i + 1;
					
					print("<li>");

					if ($i == 3) {

						print("<a href='event.php'>");
					}
					
					print("<img src='./image/slides/s{$imgNum}.jpg'>

							<div class='inner'>

								<h4 class='head {$headClass[$i]}'>{$head[$i]}</h4>

								<h5 class='comment {$commentClass[$i]}'>{$comment[$i]}</h5>

							</div>

							</a>

						</li>");
				}
			?>

			</div>
			
		</div>
		
		<div id="sub">

			<div class="subContents">
				
				<div><a href="./schedule"><img src="./image/sub/date.jpg"></a></div>

				<div><a href="news"><img src="./image/sub/news.jpg"></a></div>
				
				<div><a href="sns.php"><img src="./image/sub/social.jpg"></a></div>

			</div>

		</div>

	</div>

</div>

<?php
	require_once 'footer.php';
?>