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

								<img src='./image/slides/s3.jpg'>

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
							
								<img src='./image/slides/s5.jpg'>

							");
						}

					print("</li>");
				}
			?>

			</div>
			
		</div>
		
		<div id="sub">

			<div class="subContents">

				<section class="inner" id="schedule">
					<a href="schedule">
						<div>
							<p>
								Kashiwa / Kashiwa-no-ha<br>
								スケジュール	
							</p>
							<img src='image/sub/schedule.png'>
						</div>
					</a>
				</section>

				<section class="inner" id="nearDojo">
					<a href="dojo">
						<div>
							<p>
								お近くのDojo<br>
								柏市内で4つのDojoが開催中。	
							</p>
							<img src='image/dojoLogo.png'>
						</div>
					</a>
				</section>

				<section class="inner" id="spd">
					<a href="events/spd/2017">
						<div>
							<p>
								Special Presentation Day 2017<br>
								発表者募集中。
							</p>
							<img src='image/eventLogos/spd2017.png'>
						</div>
					</a>
				</section>
				
			</div>

		</div>

	</div>

</div>

<?php
	require_once 'footer.php';
?>