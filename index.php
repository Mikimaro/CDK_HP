<?php
	require_once 'header.php';
?>

<div id="index-container">

	<div id="contents">

		<div class="flexslider">

			<div class="slides slidefix">

			<?php

				for ($i=0; $i < 6; $i++) { 

					$imgNum = $i + 1;
					
<<<<<<< HEAD
					print(

						"<li>

							<img src='./image/slides/s{$imgNum}.jpg'>

						</li>"

						);
=======
					print("<li>");

						if ($i == 0) {
							print("

							<div class='slideInner'>
								<img src='./image/text/white/nameKashiwa.png'>
							 	<img src='./image/text/white/catchKashiwa.png' class='catch'>
							</div>

							");

						}else if ($i == 3) {
							print("

							<div class='slideInner'>
								<img src='./image/text/black/nameKashiwanoha.png'>
								<img src='./image/text/black/catchKashiwanoha.png'class='catch'>
							</div>
							");
						}else if ($i == 3) {
							print("

							<div class='slideInner'>
								<img src='./image/text/black/nameKashiwanoha.png'>
								<img src='./image/text/black/catchKashiwanoha.png'class='catch'>
							</div>
							");
						}
				

							
					print("

						<img src='./image/slides/s{$imgNum}.jpg'>

						</li>
					");
>>>>>>> 94d4d09534239137ad93f1b85b9c14a4ea821a13
				}
			?>

			</div>
			
		</div>
		
		<div id="sub">

			<div class="subContents">


				<?php
<<<<<<< HEAD

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

=======

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

>>>>>>> 94d4d09534239137ad93f1b85b9c14a4ea821a13
				?>

			</div>

		</div>

	</div>

</div>

<?php
	require_once 'footer.php';
?>