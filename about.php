<?php
	require_once 'header.php';
?>

<div id="pageTitle">

	<br>
	<img src="./image/dojoLogo.png" class="headerLogo">
	<h1 class="headline">CoderDojoとは</h1>

</div>

<div id="main">



	<div id="about">


		<div class="aboutCoderDojo">

			<p class="title">CoderDojoのはじまり</p>
			<p class="text">
				CoderDojoとは2011年にアイルランドから始まった小・中学生向けの無料プログラミングDojoです。<br>
				現在では63カ国で875以上のDojoが開催されています。<br>
				・<a href="https://coderdojo.com/" target="blank_">CoderDojo公式サイト</a>
			</p>

		</div>

		<div class="aboutCoderDojoJapan">

			<p class="title">CoderDojo Japan</p>
			<p class="text">
				日本でCoderDojoが初めて開催されたのは2012年4月のことです。<br>
				以降、全国各地でDojoが開催され、現在では24箇所で開かれています。
				<ul>
				<?php
					$dojoName = array("旭川（札幌）", "仙台（宮城）", "泉（宮城）", "新潟（新潟）", "さいたま（埼玉）", "ひばりヶ丘（埼玉）", "飯能（埼玉）", "下北沢（東京）", "小平（東京）", "八王子（東京）", "千葉（千葉）", "柏（千葉）", "柏の葉（千葉）", "流山（千葉）", "塩尻（長野）", "福井（福井）", "名古屋（愛知）", "天白（愛知）", "長岡京（京都）", "奈良（奈良）", "大津（滋賀）", "熊野（和歌山）", "西宮・梅田（大阪）", "鹿児島（鹿児島）");

					$dojoURL = array(
						"http://coderdojo-asahikawa.github.io/",
						"https://www.facebook.com/CoderdojoSendai",
						"https://www.facebook.com/CoderdojoIzumi",
						"http://zen.coderdojo.com/dojo/jp/niigata-niigata-prefecture/niigata",
						"http://coderdojo-saitama.com/",
						"https://www.facebook.com/coderdojo.hibarigaoka",
						"https://www.facebook.com/CoderDojoHanno",
						"http://tokyo.coderdojo.jp/",
						"http://coderdojo-kodaira.github.io/",
						"http://coderdojo.code4hachioji.org/",
						"http://coderdojo-chiba.github.io/",
						"http://www.coderdojo-kashiwa.com/",
						"http://www.coderdojo-kashiwa.com/kashiwanoha",
						"",
						"http://www.shiojiri-osslabo.com/coderdojo/",
						"http://coderdojo.cowbell.jp/",
						"http://coderdojo-nagoya.github.io/",
						"http://coderdojo-tempaku.hatenablog.com/",
						"https://coderdojo-nagaokakyo.doorkeeper.jp/",
						"http://coderdojo-nara.org/",
						"https://coderdojo-otsu.doorkeeper.jp/",
						"https://www.facebook.com/coderdojo.kumano",
						"http://coderdojo-nishinomiya.info/",
						"https://zen.coderdojo.com/dojo/675"
						);
				
					for ($i=0; $i < count($dojoName); $i++) { 
						print("<li><a href='{$dojoURL[$i]}' target='blank_'>{$dojoName[$i]}</a></li>");
					}

				?>

				</ul>
			</p>

		</div>

		<div class="aboutCDK">

			<p class="title">CoderDojo Kashiwa</p>
			<p class="text">
				CoderDojo Kashiwaは2013年5月5日に第１回を開催しました。<br>
				<img src="./image/firstDojo.jpg" width="50%"><br>
				参加者は４人でとてもこじんまりとした会でした。ですが会を重ねるにつれて子どもたちもメンターも増え、今では平均して15名以上が参加する大規模なDojoとなりました。
			</p>

		</div>

	</div>
</div>

<?php
	require_once 'footer.php';
?>