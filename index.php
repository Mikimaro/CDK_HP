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

							<img src='./image/slides/s1.jpg'>

							");

						}else if ($i == 1) {
							print("

							<a href='event/spd/2017'>

								<img src='./image/slides/s2.jpg'>

							</a>
							");

						}else if ($i == 2) {
							print("

							<a href='event/spd/2017'>

								<img src='./image/slides/s3.jpg'>

							</a>
							");

						}else if ($i == 3) {
							print("

							<a href='kashiwanoha'>
							
								<div class='slideInner'>
									<img src='./image/text/black/nameKashiwanoha.png'>
									<img src='./image/text/black/catchKashiwanoha.png'>
								</div>

								<img src='./image/slides/s4.jpg'>

							</a>
							");
						}else if ($i == 4) {
							print("

							<a href='event/spd/2017'>

								<img src='./image/slides/s5.jpg'>

							</a>
							");
						}

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
								 "CoderDojo MinamiKashiwa<br>
								 	麗澤大学で。",
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