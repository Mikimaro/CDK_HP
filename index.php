<?php
	require_once 'header.php';
?>

<div id="container">

	<div id="contents">

		<div class="flexslider">

			<div class="slides slidefix">

			<?php

				for ($i=0; $i < 5; $i++) { 

					$imgNum = $i + 1;
					

					print("<li>");

					

						if ($i == 0) {
							print("

							<div class='slideInner'>
								<img src='./image/text/white/nameKashiwa.png'>
							 	<img src='./image/text/white/catchKashiwa.png'>
							</div>

							");

						}else if ($i == 1) {
							print("

							<div class='slideInnerLow'>

								<a href='kashiwanoha'>

										<img src='./image/text/white/scratchday2017.png'>

									</a>

								
							</div>


							");

						}else if ($i == 3) {
							print("

							<div class='slideInner'>

								<a href='kashiwanoha'>

									<img src='./image/text/black/nameKashiwanoha.png'>

									<img src='./image/text/black/catchKashiwanoha.png'>

								</a>

							</div>

							");
						}

					
					print("<img src='./image/slides/s{$imgNum}.jpg'>");

					print("</li>");
				}
			?>

			</div>
			
		</div>
		
		<div id="sub">

			<div class="subContents">


				<?php

				$href = array("schedule","news","kashiwanoha");

				$comment = array("Kashiwa / Kashiwa-no-ha<br>
									スケジュール",
								 "CoderDojo Kashiwaからの<br>
								 おしらせ",
								 "CoderDojo Kashiwa-no-ha<br>
									公式サイト"
					);

				$imgSrc = array("image/sub/schedule.png",
								"image/sub/news.png",
								"image/kashiwanohalogo.png"
					);



				for ($i=0; $i < count($href); $i++) { 
					print("
						<div class='inner'>

							<a href='{$href[$i]}'>

								<div>

									<p>
										{$comment[$i]}	
									</p>


									<img src='$imgSrc[$i]'>

								</div>

							</a>

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