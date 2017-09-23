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

				$href = array("schedule","dojo/minamikashiwa","dojo/kashiwa-shounan");

				$comment = array("Kashiwa / Kashiwa-no-ha<br>
									スケジュール",
								 "CoderDojo MinamiKashiwa<br>南柏でこの夏スタート",
								 "CoderDojo Kashiwa-Shounan<br>
									旧沼南町エリアで。"
					);

				$imgSrc = array("image/sub/schedule.png",
								"dojo/minamikashiwa/images/logo.png",
								"dojo/kashiwa-shounan/images/logo.png"
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