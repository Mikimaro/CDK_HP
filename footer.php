<div id="footer">

	<div id="footer-contents">

		<div id="footerLinks" class="clearfix">

			<div class="fb-page" data-href="https://www.facebook.com/CoderDojokashiwa/" data-tabs="timeline" data-width="80%" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
				<div class="fb-xfbml-parse-ignore">
					<blockquote cite="https://www.facebook.com/CoderDojokashiwa/">
						<a href="https://www.facebook.com/CoderDojokashiwa/">CoderDojo Kashiwa</a>
					</blockquote>
				</div>
			</div>

			<nav class="footerNav">

				<div class="linksLeft">

					<div>

						<ul>

							<h1>・CoderDojo</h1>

							<?php

								$CoderDojoName = array(
									"CoderDojo Kashiwa-no-ha公式サイト",
									"OnlineDojo 公式サイト",
									"CoderDojo Japan公式サイト");

								$CoderDojoURL = array(
									"http://coderdojo-kashiwa.com/kashiwanoha",
									"http://onlinedojo.coderdojo-kashiwa.com",
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

							$Text = array("最新の情報","プレスリリース");

							$URL = array("#","news");

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

							$Text = array("最新の情報","過去のイベント");

							$URL = array("#","event.php");
							
							for ($i= 0; $i < count($Text); $i++) { 
								print("<li><a href='{$URL[$i]}'>{$Text[$i]}</a></li>");
							}
						?>

					</ul>
				</div>

				<div>
				
					<ul>
					
						<h1>・活動報告</h1>

						<?php

							$Text = array("最新の情報");

							$URL = array("#");

							for ($i= 0; $i < count($Text); $i++) { 
								print("<li><a href='{$URL[$i]}'>{$Text[$i]}</a></li>");
							}

						?>
					</ul>
				</div>

			</div>

			</nav>

		</div>

		<div id="mere" class="clearfix">

			<div id="copyright">

				<p>Copyright © 2016 CoderDojo Kashiwa All right reserved.<br>
				Created by Mikimaro Yonekura & Kirie Miyajima
				</p>

			</div>

			<div id="aux">

				<?php
					$Name = array('サイトマップ','プライバシーポリシー','スポンサー','連絡先');

					$URL = array('sitemap.php','privacy.php','sponsor.php','contact.php');

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