<?php
	require_once 'header.php';

	$date = array(
		"2017.08.14",
		"2016.07.22",
		"2016.07.03",
		"2016.03.27"
	);

	$title = array(
		"沼南エリア及び南柏エリアに新しいDojoをオープンします",
		"柏市の公立小学校におけるプログラミング教育導入についてのお知らせ",
		"ホームページをリニューアル",
		"2016年度を迎えるにあたってのお知らせ"
	);

	$text = array(
		"CoderDojo Kashiwa の姉妹Dojoとして、旧沼南町エリアにCoderDojo KashiwaShounanを、南柏エリアにCoderDojo Minamikashiwaをスタートします。<br>
		<a href='dojo/kashiwa-shounan'>CoderDojo KashiwaShounanのホームページ</a><br><a href='dojo/minamikashiwa'>CoderDojo Minamikashiwaのホームページ</a>",
		"千葉県柏市は2017年度より、市内にあるすべての公立小学校でプログラミング教育を導入することが決定しました。<br>CoderDojo Kashiwaはカリキュラムの開発やワークショップの開催、教員研修の支援等を行います。具体的な内容は随時発表していきます。",
		"CoderDojo Kashiwaのホームページをリニューアルしました。",
		"2016年度よりCoderDojo Kashiwaの運営体制を変更します。詳しくは、<a href='./news/'>こちら</a>をご覧ください"
	);

?>

<div id="container">

	<div class="pageTitle">
		<img src="./image/dojoLogo.png" class="headerLogo">
		<h1 class="headline">プレスリリース</h1>
		<p class="headline">CoderDojo Kashiwaから皆様への重要なお知らせです</p>
	</div>

	<div id="pressRelease">

		<?php 
			for ($i=0; $i < count($title); $i++) { 
				print("
					<div class='pContents'>
						<div class='pText'>
							<p class='pDate'>{$date[$i]}発表</p>
							<p class='pTitle'>{$title[$i]}</p>
							<p class='text'>{$text[$i]}</p>
						</div>
					</div>
				");
			}
		?>

	</div>

</div>

<?php
	require_once 'footer.php';