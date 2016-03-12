<?php
	require_once 'header.php';
?>

<div id="pageTitle">

	<br>
	<img src="#" class="headerLogo" alt="ロゴ">
	<h1 class="headline">RTDとは</h1>

</div>

<div id="conteiner">

		<div id="rtd">

		<div class="individual">

			<div class="aboutRTD">

				<p class="title">RTD</p>

				<p class="text">
					RTD(Real Time Documentation)とは、ワークショップやイベントの出来事を映像で記録し、それらの終了時に編集・保存されたメディアとして公開できるパーソナルメディア活動です。<br>

					RTDには3つの表現方法が存在します。<br>

					<ul>

					<?php
						$rtdType = array("Real Time Paper（リアルタイムペーパー）","Real Time Video（リアルタイムビデオ）","Document Wall（ドキュメントウォール）");

						for ($i =0; $i <count($rtdType) ; $i++) { 
							print("<li>{$rtdType[$i]}</li>");
						}
					?>
					</ul>

					<br>

					・<a href="http://coderdojo-kashiwa.com/rtd/" target="blank_">RTD公式サイト</a>

				</p>

			</div>

			<div>
				<p class="title">経験と実績に勝るものはありません</p>

				<p class="text">
					私達の活動は2014年から始まりました。<br><br>

					立ち上げ当初は技術も稚拙でしたが、2年間の間に10を超えるワークショップやイベントに参加し培った技術は確かなものです。<br>

					("Scratch Day 2014,2015 in Tokyo"，"女子中高生のための情報・メディア工房2014"など様々なワークショップやイベントに参加)<br>



				</p>
			</div>
		</div>
	</div>
</div>

<?php
	require_once 'footer.php';