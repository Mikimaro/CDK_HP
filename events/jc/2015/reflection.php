<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>JuneConference</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/reflection.css">
	<link rel="shortcut icon" href="img/favicon.ico">
	<script src="script/jquery.js"></script>
	<script type="text/javascript">
		$(function(){
			$('a[href^=#]').click(function() {
                var speed = 700;
                var href= $(this).attr("href");
               	var target = $(href == "#" || href == "" ? 'html' : href);
                var position = target.offset().top-50;
                $('body,html').animate({scrollTop:position}, speed, 'swing');
                	return false;
                });
            });
	</script>
</head>

<body>
	<div id="menu">
		<ul>
			<a href="index.html#header"><li><img src="img/dojoLogo.png" width="40" height="40" class="menuImg"></li></a>
			<a href="index.html#contents"><li>内容</li></a>
			<a href="index.html#schedule"><li>タイムテーブル</li></a>
			<a href="index.html#guest"><li>ゲスト</li></a>
			<a href="reflection.php" target="_blank"><li>振り返る</li></a>
		</ul>
	</div>
	
	<div id="header">
		<img src="img/header.png" width="500" height="500">
	</div>

	<div id="main">

		<div id="submenu">
			<ul>
				<a href="#opening"><li>Opening</li></a>
				<a href="#session1"><li>Session1</li></a>
				<a href="#session2-1"><li>Session2-1</li></a>
				<a href="#session2-2"><li>Session2-2</li></a>
				<a href="#session2-3"><li>Session2-3</li></a>
				<a href="#session3"><li>Session3</li></a>
			</ul>
		</div>

		<br><br>
		<hr>

		<div id="opening">
			<p class="title">13:00 Opening</p>
			【13:00】<br>
				<img src="img/reflection/session1/001.jpg" class="img"><br>
				代表挨拶。JuneConferenceの概要説明。<br>
				<img src="img/reflection/session1/002.png" class="img"><br>
				5月６月は世界各地でIT関連のカンファレンスが開催されている。<br>
				MicrosoftのBuild、GoogleのGoogleI/O、AppleのWWDC、そして、CDKのJuneConference。<br><br>

		</div>

		<hr>

		<div id="session1">
			<p class="title">Session 1 Keynote</p>
			<p class="text">
			【13:03】Keynote<br>
				<img src="img/reflection/session1/003.jpg" class="img"><br>
				加藤遼より、2014年度の活動報告。<br>
				私たちは昨年度12のプロジェクトに挑んだ。<br>
				<img src="img/reflection/session1/004.png" class="img"><br>
				文字通り挑戦の1年間。
			</p>
		</div>

		<hr>

		<div id="session2-1">
			<p class="title">Session2-1</p>
			<p class="text">
			【13:20-14:00】トークセッション<br>
				<img src="img/reflection/session2/001.jpg" class="img"><br>
				2014年度に様々なプロジェクトで関わった皆様をゲストとして迎え、トークセッション。<br>
				登壇者一覧：（敬称略）<br>
				<ul>
					<li>斉藤愛美　　educode</li>
					<li>長井悠　　ハバタク株式会社</li>
					<li>山下洋輔　　柏市議会議員</li>
					<li>熊井晃司　　NPO法人CANVAS</li>
					<li>津田恭平　　一般社団法人イトナブ石巻</li>
				</ul>

				イトナブ石巻は震災から10年後の2021年までに1000人のIT技術者を育成するために活動をしている団体です。東北Tech道場でAndroidアプリの開発を教えたり、年に1度石巻ハッカソンという「東日本最大級」のハッカソンを開催しています。<br>
				また、長野県松本市にあるeducodeは、クラウドット株式会社のプロジェクトで同様に若者にiOSアプリの開発やWebアプリの制作、子どもたちにはScratchを用いた学習機会を提供しています。<br>
				石巻と松本、そして柏と地方都市でありながらIT教育への熱がすごく高まっていることが実感できました。<br><br>

				NPO法人CANVASはProgramming Education Gathering（＝PEG）というプロジェクトを行っていました。これはGoogleから後援を受けて、全国の教育機関にRasperryPiという小型のコンピュータを配布し、プログラミング教育を普及させようとするものです。CoderDojo KashiwaもこのPEGプログラムに加入しており、実際にRaspberryPiを頂いています。また、CANVASとはScratchDay in Tokyoでも密接に関わっていて、昨年度はとても多くの場面でご一緒しました。<br>
				そんなCANVASの熊井さんには、国内のプログラミング教育事業についてお話しました。PEGプロジェクトでは北は北海道、南は沖縄まで全国各地様々な教育機関から問い合わせが来たそうです。都市部地方関係なく、皆プログラミングを学ばせたいという思いはとても強く、一歩踏み出す機会をPEGで作れたので良かったとおっしゃっていました。<br><br>

				CDK設立当初から関わっている山下さんには、プログラミングだけでなくSTEM教育（Science, Technology, Engineering, Mathematicsの頭文字）についてお話を聞きました。イギリスやオランダでも最近盛り上がりを見せているSTEM教育はこれからもっともっと目にする機会が多くなるのではないでしょうか。<br><br>

				長井さんには海外の事例についてお話いただきました。現在行っているプロジェクトのひとつに「OpenAquariumProject」があります。これは世界中の子どもたちがScratchで自国近海に生息している魚を作り、ひとつの水槽でシェアしようというものです。現在はフィリピンのセブの子どもたちと合同ですすめています。<br><br>

			</p>
		</div>

		<hr>

		<div id="session2-2">
			<p class="title">すずこふプレゼン</p>
			<p class="text">
				<img src="img/reflection/session2/002.jpg" class="img"><br>
				昨年の7月からCoderDojo Kashiwaのメンバーとなったすずこふこと鈴木貴也。私たちと彼との出会いは、柏ではなく六本木ヒルズのGoogleオフィスでした。それから気づいたらいつの間にかメンバーになったすずこふは、一期一会だからこそその出会いを大切にしようと語りました。<br>
			</p>

		</div>

		<hr>
 
		<div id="session2-3">
			<p class="title">高校生メンター座談会</p>
			<p class="text">
				<img src="img/reflection/session2/003.jpg" class="img"><br>
				高校生メンターたちがテーマにそって自分の答えを書くというスタイルで座談会に挑みました。<br>
				テーマ１：CoderDojo Kashiwaに関わって得たもの。<br>
				プログラミングスキル、プレゼン、DJ、映像編集スキルなど、皆様々なものの才能を伸ばしています。参加してくれている子どもたちだけでなく、メンター側も成長できるのがCoderDojo Kashiwaのいいところです。<br><br>

				テーマ２：得たスキルでやったこと。<br>
				iOSアプリやWebの開発、映像作成やイベントでのDJなど様々な場面で活躍しています。<Br><br>

				テーマ３：学校でできなくて、Dojoでできることは？<br>
				Dojoでは好きなことを自由に、誰にも邪魔されずにのびのびとできることが最大のポイント。自分のスキルを「使う」ことができる。<br>
			</p>
		</div>

		<hr>

		<div id="session3">
			<p class="title">14:20　Session3 2015年のビジョン</p>
			<p class="text">
				2015年度はCoderDojo Kashiwa Perfet Yearにすべく、4つの新しいプロジェクトを発表します。<br>
				これらのプロジェクトに共通しているのは「Connection〜つながり〜」です。<br><br>

				<strong>１．Dojoと家庭のつながり</strong><br>
				子どもを１人でDojoに送り出すのは、時に勇気が必要なことでしょう。私たちはその不安を少しでも取り除くべく、新しいシステムを用意しました。昨年末にプレリリースしたiPadによる受付システムを正式リリースします。<br>
				<img src="img/reflection/session3/ipadapp.png" id="small">
				<br><br>

				<strong>２．Dojoと子どもたちとのつながり</strong><br>
				今年の１月１日にリリースしたOnlineDojoは、Dojoに来てくれている子どもたちがオンラインで学べる学習ツールです。ここに新しいコンテンツと新しいデザインを導入します。よりわかりやすいデザインと、現在必要とされているインターネットリテラシーの講座を近日公開します。<br>
				<img src="img/reflection/session3/onlinedojo.png" id="small"><br>
				<br><br>
				また、昨年末に開催したSpecial Presentation Dayを今年も開催することが決定しました。子どもたちには、これをひとつの目標に、作品作りを続けていってほしいと思います。

				<br><br>
				<strong>３．Dojoと初参加者とのつながり</strong><br>
				Dojoにはじめてきてくれる方がはじめてるみるものはホームページです。よりわかりやすくDojoのことを知ってもらうために、ホームページをリニューアルします。こちらも近日公開です。<br>
				<img src="img/reflection/session3/homepage.png" id="small"><br>
				<br><br>

				<strong>４．Dojoと地域とのつながり</strong><br>
				CoderDojo Kashiwaができてからこの２年間、私たちは常に柏地域におけるプログラミング教育団体として、またIT団体として最大規模でした。大手の企業がまだ参入していない地域でもあります。ここで、今一度柏のまわりを見てみましょう。<br>
				<img src="img/reflection/session3/001.png" class="img"><br>
				CoderDojo Kashiwaに来てくれている子どもたちが住んでいるエリアは大体このエリアです。主に柏駅の周辺です。<br>
				<img src="img/reflection/session3/002.png" class="img"><br>
				しかし、柏の周辺にはまだまだたくさんの子どもたちがいます。プログラミングにいちども触れたことがない子たちが多いでしょう。私たちはより多くの子どもたちにプログラミングができる機会を提供したいと常に思い続けています。この地域の子どもたちがDojoに来ていない理由はなんでしょうか。もしこれが、「距離」的要因であれば解決策は簡単です。<br>
				<img src="img/reflection/session3/003.png" class="img"><br>
				このように、CoderDojoがたくさんあれば良いのです。<br><br>

				私たちは実際に行動に移します。2015年６月、CoderDojo Kashiwaは柏の葉エリアに新しいDojoを開きます。<br>

				<iframe width="560" height="315" src="https://www.youtube.com/embed/wmG1D5AnHno?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				
				<br><br>

				<img src="img/reflection/session3/009.jpg" class="img"><br><br>


				<img src="img/reflection/session3/kashiwanohalogo.png" id="small"><br>
				柏の葉Dojoのロゴ。
				<br><br>

				新しい柏の葉拠点は柏の葉オープンイノベーションラボ「<a href="http://koil.jp">KOIL</a>」です。	<br>
				CoderDojo KashiwaとKOILが協力したら、柏の葉Dojoができました。<br>
				<img src="img/reflection/session3/004.png" class="img"><br><br>
				これに伴い、CoderDojo Kashiwaの協賛にKOILが加わります。<br>
				<img src="img/reflection/session3/005.png" class="img"><br><br>

				<br>
				以上４つの新しいプロジェクトを発表しました。<br><br>


				最後にはスタッフが勢揃い。<br>
				<img src="img/reflection/session3/mentor.jpg" class="img">

			</p>
		</div>
		
	</div>

	<div id="footer">
		<hr>
		<p>Copyright(C)2015 CoderDojo Kashiwa</p>
	</div>

	</div>
</body>
</html>