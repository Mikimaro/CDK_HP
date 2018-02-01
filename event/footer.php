<div id="footer">

	<div id="footer-contents">

	<!--
		<div id="footerLinks" class="clearfix">
			<div class="fb-page" data-href="https://www.facebook.com/CoderDojokashiwa/" data-tabs="timeline" data-width="300" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
				<div class="fb-xfbml-parse-ignore">
					<blockquote cite="https://www.facebook.com/CoderDojokashiwa/">	<a href="https://www.facebook.com/CoderDojokashiwa/">Coder Dojo柏</a>
					</blockquote>
				</div>
			</div>
	-->
			
		<div class="footerNav contaier">

			<nav class="row">
				<!-- CoderDojo -->
				<div class="footerMainContainer col-xl col-lg col-md-6">
					
					<h1>CoderDojo</h1>

					<ul>

					<?php

						$CoderDojoName = array(
							"近くのCoderDojo",
							"Kashiwa",
							"Kashiwa-no-ha",
							"Minami-Kashiwa",
							"Kashiwa-Shounan",
							"Nagareyama",
							"Japan"
						);

						$CoderDojoURL = array(
							"dojo/",
							"dojo/kashiwa/",
							"dojo/kashiwanoha/",
							"dojo/minamikashiwa/",
							"dojo/kashiwa-shounan/",
							"http://www.code-for-nagareyama.org/?cat=11",
							"https://coderdojo.jp/"
						);

						for ($i= 0; $i < count($CoderDojoName); $i++) { 
							print("<li><a href='{$CoderDojoURL[$i]}'>{$CoderDojoName[$i]}</a></li>");
						}

					?>

					</ul>
				</div>

				<!-- お知らせ -->
				<div class="footerMainContainer col-xl col-lg col-md-6">
					<h1>お知らせ</h1>

					<ul>

					<?php

						$Text = array("メディア掲載情報","プレスリリース","ドキュメント");

						$URL = array("../media.php","../pressRelease.php","../docs/");

						for ($i= 0; $i < count($Text); $i++) { 
							print("<li><a href='{$URL[$i]}'>{$Text[$i]}</a></li>");
						}

					?>
					
					</ul>
				</div>

				<!-- イベント -->
				<div class="footerMainContainer col-xl col-lg col-md-6">
					<h1>イベント</h1>

					<ul>

					<?php

						$Text = array("イベント一覧","Special Presentation Day","ScratchDay","June Conference");

						$URL = array("event/","spd/");
						
						for ($i= 0; $i < count($Text); $i++) { 
							print("<li><a href='{$URL[$i]}'>{$Text[$i]}</a></li>");
						}

					?>
					
					</ul>
				</div>

				<!-- リンク -->
				<div class="footerMainContainer col-xl col-lg col-md-6">

					<h1>リンク</h1>

					<ul>
					
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
			</nav>
		</div>

		<div id="mere" class="row">
			<div id="copyright" class="col-12">
				Copyright © 2016-2018 CoderDojo Kashiwa All right reserved.<br>
				Created by Mikimaro Yonekura & Kirie Miyajima
			</div>

			<div id="aux" class="col-12">

				<?php
					$Name = array('プライバシーポリシー','スポンサー','代表紹介','お問合わせ');


					$URL = array('../privacy/','../sponsor.php','../champion.php','../contact.php');

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