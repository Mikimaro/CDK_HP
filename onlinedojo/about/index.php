<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>OnlineDojoについて</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssreset/cssreset-min.css">
	<link rel="shortcut icon" href="./img/favicon.ico" type="image/vnd.microsoft.icon">
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script>
		//SmoothScroll	
			$(function(){
		   		$('a[href^=#]').click(function() {
		      		var speed = 1000;
		      		var href= $(this).attr("href");
		      		var target = $(href == "#" || href == "" ? 'html' : href);
		      		var position = target.offset().top-80;

				    $('body,html').animate({scrollTop:position}, speed, 'swing');
	    	  			return false;
				});
			});
		</script>
</head>

<body>
<div id="menuBar">
	<div id="header">
		<h1>CoderDojo Kashiwa OnlineDojo</h1>
	</div>

	<div id="menu">
		<ul>
			<a href=""><li><img src="img/dojoLogo.png" width="15%" height="100%"></li></a>
			<a href="#first"><li>はじめに</li></a>
			<a href="#feature"><li>特徴</li></a>
			<a href="#condition"><li>使用条件</li></a>
			<a href="#how"><li>利用方法</li></a>
		</ul>
	</div>
</div>

	<div id="main">
		<div id="first">
			<h1 class="h1">はじめに</h1>
			<p>CoderDojo Kashiwaの子どもたちが、家でもしっかりと学習できることを目的としてつくられたオンライン学習サービスです。
				Dojoから帰って家で勉強しようとしても、周りに質問できる人がいない。<br>
				それをサポートするために作りました<br>
				OnlineDojoはすべてCoderDojo Kashiwaのメンターが開発しています<br>
				<img src="img/img02.jpg" width="50%" height="50%">
			</p>
		</div>

		<div id="feature">
			<h1 class="h1">特徴</h1>
				<p>OnlineDojoには以下の機能が実装されています</p>
				<p>	・Scratch/HTML,CSSのWebテキスト<br>
					・ネットリテラシー講座<br>
					・メンターに直接質問できるフォーム<br>
					・ディスカッションボード<br>
					・普段のDojoへの参加登録機能<br>
					<br>
					ネットリテラシー講座については、学生団体UniXからカリキュラム提供をして頂いております。<br>
					<a href="https://www.facebook.com/UniX.NL?fref=ts3"><img src="img/unix.jpg" width="20%" height="20%"></a>
				</p>
		</div>

		<div id="condition">
			<h1 class="h1">使用条件</h1>
				<p>OnlineDojoに参加するには、CoderDojo Kashiwaが発行したメンバーズカードが必要です。</p><br>
				<img src="img/memberscard.JPG" width="50%" height="50%"><br>
				<p>このメンバーズカードは、CoderDojoKashiwaに複数回参加してくれている子どもたち全員に発行します。<br>
					また、保護者の方にもアカウントを準備する予定です。いましばらくお待ちください。</p>
					<br><br>
					<p>それ以外の方で、OnlineDojoを体験してみたいという方は、ゲストアカウントでログインすることが可能です。<br>
						ゲストアカウント使用希望の方もCoderDojo Kashiwaへお越しください</p>
		</div>

		<div id="how">
			<h1 class="h1">使用方法</h1>
				<a href="http://onlinedojo.coderdojo-kashiwa.com">ログインする</a>
		</div>

		<div id="logo">
			<a href="http://www.coderdojo-kashiwa.com"><img src="img/logo.png" width="20%" height="20%"></a>
		</div>
	</div>

	<div id="footer">
		<p>Copyright(C)2015 CoderDojo Kashiwa</p>
		<p>Created by KYRIE MIYAJIMA</p>
</body>
</html>
