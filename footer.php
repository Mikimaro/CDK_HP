<div id="footer">

	<div id="footer-contents">

		<div id="footerLinks" class="clearfix">


			<div class="fb-page" data-href="https://www.facebook.com/CoderDojokashiwa/" data-tabs="timeline" data-width="300" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
				<div class="fb-xfbml-parse-ignore">
					<blockquote cite="https://www.facebook.com/CoderDojokashiwa/">	<a href="https://www.facebook.com/CoderDojokashiwa/">Coder Dojo柏</a>
					</blockquote>
				</div>
			</div>

			<div class="footerNav">

				<div class="linksLeft">

					<div>

						<ul>

							<h1>・CoderDojo</h1>

							<?php

								$CoderDojoName = array(
									"CoderDojo Kashiwa-no-haの公式サイト",
									"OnlineDojoの公式サイト",
									"CoderDojo Japanの公式サイト");

								$CoderDojoURL = array(
									"kashiwanoha",
									"onlinedojo",
									"http://www.coderdojo.jp/");

								for ($i= 0; $i < count($CoderDojoName); $i++) { 
									print("<li><a href='{$CoderDojoURL[$i]}'>{$CoderDojoName[$i]}</a></li>");
								}
							?>

						</ul>
					</div>

					<div>

						<ul>

							<h1>・RTD</h1>

							<?php

								$RTDName = array("公式サイト","公式YouTube");

								$RTDURL = array("rtd","http://www.youtube.com/channel/UCB2CuGWflVkNSP0FD3E0fEA/videos");

								for ($i= 0; $i < count($RTDName); $i++) { 
									print("<li><a href='{$RTDURL[$i]}'>{$RTDName[$i]}</a></li>");
							}
						?>
					</ul>
				</div>

				<div>

					<ul>

						<h1>・メンター</h1>

						<?php

							$Text = array("メンターについて","メンター募集");

							$URL = array("mentor.php","adopt.php");

							for ($i= 0; $i < count($Text); $i++) { 
							print("<li><a href='{$URL[$i]}'>{$Text[$i]}</a></li>");
							}
						?>

					</ul>
				</div>
			</div>

			<div class="linksRight">

				<div>
				
					<ul>
					
						<h1>・ニュース</h1>

						<?php

							$Text = array("プレスリリース", "メディア掲載情報");

							$URL = array("pressRelease.php", "media.php");

							for ($i= 0; $i < count($Text); $i++) { 
								print("<li><a href='{$URL[$i]}'>{$Text[$i]}</a></li>");
							}

						?>
					</ul>
				</div>

				<div>

					<ul>

						<h1>・イベント</h1>
					
						<?php

							$Text = array("最新の情報","イベント一覧");

							$URL = array("event/ScratchDay","event.php");
							
							for ($i= 0; $i < count($Text); $i++) { 
								print("<li><a href='{$URL[$i]}'>{$Text[$i]}</a></li>");
							}
						?>

					</ul>
				</div>

			</div>

			</div>

		</div>

		<div id="mere" class="clearfix">

			<div id="copyright">

				<p>Copyright © 2016 CoderDojo Kashiwa All right reserved.<br>
				Created by Mikimaro Yonekura & Kirie Miyajima
				</p>

			</div>

			<div id="aux">

				<?php
					$Name = array('プライバシーポリシー','運営について','スポンサー','連絡先');

<<<<<<< HEAD
					$URL = array('./privacy','founder.php','sponsor.php','contact.php');
=======
					$URL = array('privacy','founder.php','sponsor.php','contact.php');
>>>>>>> 0ef08b51dd688e93a05308bb9e11533269cea5f8

					for ($i= 0; $i < count($Name); $i++) { 
						print("<a href='{$URL[$i]}' class='aux-contents'>$Name[$i]</a>");
					}
				?>

			</div>

		</div>
</div>

</div>
</body>
</html>