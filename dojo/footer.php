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
							<h1>CoderDojo</h1>

							<?php

								$CoderDojoName = array(
									"近くのCoderDojo",
									"CoderDojo Kashiwa",
									"CoderDojo Kashiwa-no-ha",
									"CoderDojo Minami-Kashiwa",
									"CoderDojo Kashiwa-Shounan",
									"CoderDojo Nagareyama",
									"CoderDojo Japan"
								);

								$CoderDojoURL = array(
									"../dojo",
									"../dojo/kashiwa/",
									"../dojo/kashiwanoha/",
									"../dojo/minamikashiwa/",
									"../dojo/kashiwa-shounan/",
									"http://code-for-nagareyama.org/?cat=11",
									"https://coderdojo.jp/"
								);

								for ($i= 0; $i < count($CoderDojoName); $i++) { 
									print("<li><a href='{$CoderDojoURL[$i]}'>{$CoderDojoName[$i]}</a></li>");
								}

							?>

						</ul>
					</div>
					<div>
						<ul>
							<h1>メンター</h1>

							<?php

								$Text = array("メンターについて");

								$URL = array("../mentor.php");

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

							<h1>お知らせ</h1>

							<?php

								$Text = array("メディア掲載情報","プレスリリース","ドキュメント");

								$URL = array("../media.php","../pressRelease.php","../docs/");

								for ($i= 0; $i < count($Text); $i++) { 
									print("<li><a href='{$URL[$i]}'>{$Text[$i]}</a></li>");
								}

							?>


						</ul>
					</div>
					<div>
						<ul>
							<h1>イベント</h1>

							<?php

								$Text = array("イベント一覧");

								$URL = array("../event/");
								
								for ($i= 0; $i < count($Text); $i++) { 
									print("<li><a href='{$URL[$i]}'>{$Text[$i]}</a></li>");
								}

							?>

						</ul>
					</div>
					<div>
						<ul>
							<h1>リンク</h1>
						
							<?php

								$Text = array(
									"<i class='fa fa-facebook' aria-hidden='true'></i>",
									"<i class='fa fa-twitter' aria-hidden='true'></i>",
									"<i class='fa fa-youtube-play' aria-hidden='true'></i>",
									"<i class='fa fa-github' aria-hidden='true'></i>"
								);

								$URL = array(
									"https://www.facebook.com/CoderDojokashiwa/",
									"https://twitter.com/CDKashiwa",
									"https://www.youtube.com/channel/UCB2CuGWflVkNSP0FD3E0fEA",
									"https://github.com/CoderDojoKashiwa"
								);
								
								for ($i= 0; $i < count($Text); $i++) { 
									print("<li class='footerSNS'><a href='{$URL[$i]}'>{$Text[$i]}</a></li>");
								}

							?>

						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="mere" class="clearfix">
			<div id="copyright">
				Copyright © 2016-2017 CoderDojo Kashiwa All right reserved.<br>
				Created by Mikimaro Yonekura & Kirie Miyajima
			</div>

			<div id="aux">

				<?php
					$Name = array('プライバシーポリシー','スポンサー','代表紹介','お問い合わせ');

					$URL = array('../privacy','../sponsor.php','../champion.php','../contact.php');

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