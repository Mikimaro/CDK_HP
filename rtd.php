<?php
	require_once 'header.php';
?>

<div id="container">

	<div class="pageTitle">

		<img src="./image/dojoLogo.png" class="headerLogo">
		<h1 class="headline">Real Time Documentation</h1>
		<p class="headline">大切な出来事はみんなで共有</p>

	</div>

		<div id="rtd">

		<div class="individual">

			<div class="aboutRTD title-of-top">

				<p class="title">RTD</p>

				<p class="text">
					RTD(Real Time Documentation)とは、ワークショップやイベントの出来事を映像で記録し、それらの終了時に編集・保存されたメディアとして公開できるパーソナルメディア活動です。<br>

					RTDには3つの表現方法があります。<br>
				</p>

				<ul>

					<?php
						$rtdType = array("Real Time Paper（リアルタイムペーパー）","Real Time Video（リアルタイムビデオ）","Document Wall（ドキュメントウォール）");

						for ($i =0; $i <count($rtdType) ; $i++) { 
							print("<li>{$rtdType[$i]}</li>");
						}
					?>
				</ul>

				<br>

				<p class="text">
					詳しくは以下のサイトで紹介しています。<br>

					・<a href="http://coderdojo-kashiwa.com/rtd/" target="blank_">RTD公式サイト</a>

				</p>

			</div>

			<br>

			<div>
				<p class="title">CoderDojo Kashiwa/Kashiwa-no-haでの活動</p>

				<p class="text">
					私達の活動は2014年から始まりました。<br><br>
					

				</p>
			</div>
		</div>
	</div>
</div>

<?php
	require_once 'footer.php';