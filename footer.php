
<hr>

<div id="footer">

	<div class="fb-page" data-href="https://www.facebook.com/CoderDojokashiwa/" data-tabs="timeline" data-width="80%" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/CoderDojokashiwa/"><a href="https://www.facebook.com/CoderDojokashiwa/">CoderDojo Kashiwa</a></blockquote></div></div>



	<div id="footerLinks">

		<div class="linksLeft">

			<div>

				<ul>

					<h1>CoderDojo</h1>

					<?php

						$CoderDojoName = array("CoderDojo Kashiwa-no-ha公式サイト","OnlineDojo (Kashwia, Kashiwa-no-ha) 公式サイト","CoderDojo Japan公式サイト");

						$CoderDojoURL = array("http://coderdojo-kashiwa.com","http://coderdojo-kashiwa.com/kashiwanoha","http://onlinedojo.coderdojo-kashiwa.com","http://www.coderdojo.jp/");

						for ($i= 0; $i < count($CoderDojoName); $i++) { 
							print("<li><a href='{$CoderDojoURL[$i]}'>{$CoderDojoName[$i]}</a></li>");
						}
					?>

				</ul>
			</div>

			<div>

				<ul>

					<h1>RTD</h1>

					<?php

						$RTDName = array("RTDの実績","公式Twitter","公式FaceBookページ");

						$RTDURL = array("#","#","#");

						for ($i= 0; $i < count($RTDName); $i++) { 
							print("<li><a href='{$RTDURL[$i]}'>{$RTDName[$i]}</a></li>");
						}
					?>
				</ul>
			</div>

			<div>

				<ul>

					<h1>メンター</h1>

					<?php

						$Text = array("メンターとは","メンターになる","メンター紹介");

						$URL = array("#","#","#");

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

					<h1>イベント</h1>
					
					<?php

						$Text = array("最新情報");

						$URL = array("#");

						for ($i= 0; $i < count($Text); $i++) { 
							print("<li><a href='{$URL[$i]}'>{$Text[$i]}</a></li>");
						}
					?>

				</ul>

			</div>
		</div>
	</div>
</div>

</div>
</body>
</html>