<?php
	require_once 'header.php';

	$title = array(
		"道場するから 来ておくれ",
		"好評！ 高校生が小中学生にプログラミング技術伝授",
		"TKPシアターで上映する映画を子供たちが作る！CoderDojoKashiwa特別ワークショップレポート #TKP×CDK"
	);

	$date = array(
		"2015.06.24",
		"2014.02",
		"2014.02.26"
	);

	$description = array(
		"CoderDojo Kashiwa-no-haの様子が柏市の公式ブログに掲載されました。",
		"2014年2月に開催したTKPシアター×CoderDojo Kashiwa特別ワークショップの開催レポートが、朝日れすか様に掲載されました。",
		"2014年2月に開催したTKPシアター×CoderDojo Kashiwa特別ワークショップの開催レポートが、CodeIQ MAGAZINE様に掲載されました。"
	);

	$links = array(
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

	<?php
		for ($i=0; $i < count($title); $i++) { 
			print("
				<div class='mContents'>
					<div class='mText'>
						<h1 class='mTitle'>{$title[$i]}（{$date[$i]}）</h1>
						<p class='mDescription'>{$description[$i]}</p>
						<a href='{$links[$i]}' class='mLink' target='_blank'>記事を見る</a>
					</div>
				</div>
			");
		}
	?>

		
	</div>

</div>

<?php
	require_once 'footer.php';

