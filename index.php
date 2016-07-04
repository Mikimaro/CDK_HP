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
						"",
						"",
						""
					);

				$comment = array(
						"こんにちは、CoderDojo Kashiwaの公式サイトにようこそ",
						"",
						"",
						""
					);

				for ($i=0; $i < 7; $i++) { 

					$imgNum = $i + 1;
					
					print("<li>");
					
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
				
				<div>

					<a href="./schedule"><img src="./image/sub/date.png"></a>

				</div>

				<div>

					<a href="news"><img src="./image/sub/news.png"></a>

				</div>
				
				<div>

					<a href="./kashiwanoha"><img src="./image/sub/kashiwa-no-ha.png"></a>

				</div>

			</div>

		</div>

	</div>

</div>

<?php
	require_once 'footer.php';
?>