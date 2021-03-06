<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="CoderDojo,CoderDojo Kashiwa,こーだーどーじょー,千葉,柏,プログラミング教室,小学生,中学生,プログラミング">
	<link rel="stylesheet" type="text/css" href="../../style/style.css">
    <link rel="stylesheet" type="text/css" href="./style/kpStyle.css">
	<link rel="stylesheet" type="text/css" href="../../style/flexslider.css"> 
	<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="../../image/favicon.ico">

	<script src="../../script/jquery.flexslider.js"></script>
	
	<title>柏市プログラミング教育</title>

</head>

<body>

	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
  			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<script>
		//SmoothScroll	
			$(function(){
		   		$('a[href^=#]').click(function() {
		      		var speed = 1000;
		      		var href= $(this).attr("href");
		      		var target = $(href == "#" || href == "" ? 'html' : href);
		      		var position = target.offset().top;

				    $('body,html').animate({scrollTop:position}, speed, 'swing');
	    	  			return false;
				});
			});
	</script>

	<script>
		//flexslider
		$(window).load(function() {
			$('.flexslider').flexslider({
        		animation: "slide",
				slideshowSpeed: 5000,
				animationSpeed: 1000,
			});
		});
	</script>

	<div id="menu">
		<ul>
			<li><a href="../../index.php"><img src="../../image/dojoLogo.png" class="homeLogo"></a></li>
			<li><a href="../../about.php">ミッション</a></li>
			<li><a href="../../dojo/index.php">近くのDojo</a></li>
			<li><a href="../../join.php">参加する</a></li>
			<li><a href="../../rtd.php">RTDとは</a></li>	
			<li><a href="../../mentor.php">メンター</a></li>
			<li><a href="../../event.php">イベント</a></li>
		</ul>
	</div>
