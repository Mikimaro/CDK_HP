<?php
	require_once 'header.php';

	$title = array(
		"子どものための無料プログラミング道場「CoderDojo」をはじめてみませんか",
		"柏市教職員夏季情報活用研修講座　取材レポート",
		"「自由」というルールを共有し、プログラミングの学習機会を提供する
CoderDojo Japan",
		"道場するから 来ておくれ",
		"好評！ 高校生が小中学生にプログラミング技術伝授",
		"TKPシアターで上映する映画を子供たちが作る！CoderDojoKashiwa特別ワークショップレポート #TKP×CDK"
	);

	$date = array(
		"2016.10.27",
		"2016.10.18",
		"2016.9.30",
		"2015.06.24",
		"2014.02",
		"2014.02.26"
	);

	$description = array(
		"ICT教育ニュースにCoderDojo Japan及びCoderDojo Kashiwa, Kodairaが掲載されました。",
		"ベネッセ教育総合研究所の「まなびのかたち」にて、柏市のプログラミング教育事業に関する取材記事が掲載され、CoderDoj o Kashiwaについてもご紹介頂きました。",
		"ベネッセ教育総合研究所の「まなびのかたち」にて、CoderDojo JapanとCoderDojo Kashiwaの取り組みが紹介されました。",
		"CoderDojo Kashiwa-no-haの様子が柏市の公式ブログに掲載されました。",
		"2014年2月に開催したTKPシアター×CoderDojo Kashiwa特別ワークショップの開催レポートが、朝日れすか様に掲載されました。",
		"2014年2月に開催したTKPシアター×CoderDojo Kashiwa特別ワークショップの開催レポートが、CodeIQ MAGAZINE様に掲載されました。"
	);

	$links = array(
		"http://ict-enews.net/zoomin/17coderdojo/",
		"http://berd.benesse.jp/special/manabi/manabi_11.php",
		"http://berd.benesse.jp/special/manabi/manabi_10.php",
		"http://www.city.kashiwa.lg.jp/soshiki/blogtokumei/p023808.html",
		"http://www.resuka.co.jp/news/2014/04.html",
		"https://codeiq.jp/magazine/2014/02/6389/"
	);


?>

<div id="container">

	<div class="pageTitle">
		<img src="./image/dojoLogo.png" class="headerLogo">
		<h1 class="headline">メディア掲載情報</h1>
		<p class="headline">Dojoに関連した内容でメディアに掲載されたものをご紹介します</p>
	</div>

	<div id="media">

		<div>

		<?php
			for ($i=0; $i < 1; $i++) { 
				print("
					<div class='latest-newsArticle'>

						<div class='news-Text'>

							<h1 class='newsHead'>{$title[$i]}（{$date[$i]}）</h1>

							<p class='summary'>{$description[$i]}</p>

							<a href='{$links[$i]}' class='mLink' target='_blank'>記事を見る</a>

						</div>

					</div>
				");

			}

			for ($i=1; $i < count($title); $i++) { 
				print("
					<div class='newsArticle'>

						<div class='news-Text'>

							<h1 class='newsHead'>{$title[$i]}（{$date[$i]}）</h1>

							<p class='summary'>{$description[$i]}</p>

							<a href='{$links[$i]}' class='mLink' target='_blank'>記事を見る</a>

						</div>

					</div>
				");
			}
			
		?>

		</div>

		
	</div>

</div>

<?php
	require_once 'footer.php';
?>