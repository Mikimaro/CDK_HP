<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="CoderDojo,CoderDojo Kashiwa,こーだーどーじょー,千葉,柏,プログラミング教室,小学生,中学生,プログラミング">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/flexslider.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="./script/jquery.flexslider.js"></script>
		
	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			$('.flexslider').flexslider();
		});
	</script>

	<script type="text/javascript">
		$(function(){
  $("#toggle").click(function(){
    $("#menu").slideToggle();
    return false;
  });
  $(window).resize(function(){
    var win = $(window).width();
    var p = 480;
    if(win > p){
      $("#menu").show();
    } else {
      $("#menu").hide();
    }
  });
});
	</script>
	<title>CoderDojo Kashiwa</title>

</head>

<body>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5&appId=947779285308203";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



	<div id="toggle"><a href="#">MENU</a></div>
	<div id="menu">
		<ul>
			<li><a href="./index.php"><img src="./image/dojoLogo.png" class="homeLogo"></a></li>
			<li><a href="./about.php">CoderDojoとは</a></li>
			<li><a href="./join.php">参加する</a></li>	
			<li><a href="./rtd.php">RTDとは</a></li>
			<li><a href="./memtor.php">メンター</a></li>
			<li><a href="./event.php">イベント</a></li>
			<li><a href="./blog.php">活動報告</a></li>
		</ul>
	</div>

