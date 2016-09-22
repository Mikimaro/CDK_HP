<?php
	require_once 'header.php';
?>

<div id="index-container">

	<div id="contents">

		<div class="flexslider">

			<div class="slides slidefix">

			<?php

				for ($i=0; $i < 5; $i++) { 

					$imgNum = $i + 1;
					
					print(

						"<li>

							<img src='./image/slides/s{$imgNum}.jpg'>

						</li>"

						);
				}
			?>

			</div>
			
		</div>
		
		<div id="sub">

			<div class="subContents">
				
				<div class="inner">

					<a href="schedule">

						<div class="subCon-inner">

							<p>
								CoderDojo Kashiwa/Kashiwa-no-ha<br>
								スケジュール	
							</p>


							<img src="image/sub/schedule.png">

						</div>

					</a>

				</div>

				<div class="inner">

					<a href="news">

						<div class="subCon-inner">

							<p>CoderDojo Kashiwaからのおしらせ</p>


							<img src="image/sub/news.png">

						</div>

					</a>

				</div>


				<div class="inner">

					<a href="kashiwanoha">

						<div class="subCon-inner">

							<p>
								CoderDojo Kashiwa-no-ha<br>
								公式サイト
							</p>


							<img src="image/kashiwanohalogo.png">

						</div>

					</a>

				</div>

			</div>

		</div>

	</div>

</div>

<?php
	require_once 'footer.php';
?>