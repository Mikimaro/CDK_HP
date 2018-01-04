<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="CoderDojo Kashiwaは子どものためのプログラミング道場です。千葉県柏市で4つの道場を開いています。">
	<meta name="keywords" content="CoderDojo,CoderDojo Kashiwa,こーだーどーじょー,千葉,柏,プログラミング教室,小学生,中学生,プログラミング">
    <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/flexslider.css">
	<link rel="stylesheet" type="text/css" href="style/formStyle.css">
    <link rel="stylesheet" type="text/css" href="style/modal.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./image/favicon.ico">
	<script src="./script/jquery.flexslider.js"></script>

	<script>
		$(window).load(function() {
			$('.flexslider').flexslider({
        animation: "fade",
				slideshowSpeed: 5000,
				animationSpeed: 2000,
                smoothHeight: true,
				});
		});
	</script>

    <script>
        $(function(){
            $('a[href^="#"]').on('click', function(){
                var speed = 400;
                var href= $(this).attr('href');
                var target = $(href == '#' || href == '' ? 'html' : href);
                var position = target.offset().top;
                $('body,html').animate({scrollTop:position}, speed, 'swing');
                return false;
            });
        });
    </script>

     <!-- OGP settings -->
    <meta property="og:title" content="CoderDojo Kashiwa">
    <meta property="og:type" content="article">
    <meta property="og:url" content="http://coderdojo-kashiwa.com">
    <meta property="og:image" content="http://coderdojo-kashiwa.com/image/ogp.png">
    <meta property="og:site_name"  content="CoderDojo Kashiwa">
    <meta property="og:description" content="小中学生向けのプログラミング道場、CoderDojo Kashiwaの公式サイトです。">
        
    <!-- SNSicon -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta property="fb:app_id" content="947779285308203">
    <meta property="article:publisher" content="https://www.facebook.com/CoderDojokashiwa/">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@CDKashiwa" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108397197-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-108397197-1');
        </script>




	<title>CoderDojo Kashiwa</title>

</head>

<body>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



	<div id="menu">
		<ul>
			<li><a href="./index.php"><img src="./image/dojoLogo.png" class="homeLogo"></a></li>
			<li><a href="./about.php">ミッション</a></li>
			<li><a href="./dojo/">近くのDojo</a></li>
			<li><a href="./join.php">参加する</a></li>
			<li><a href="./rtd.php">RTDとは</a></li>	
			<li><a href="./mentor.php">メンター</a></li>
			<li><a href="./event/">イベント</a></li>
		</ul>
	</div>

