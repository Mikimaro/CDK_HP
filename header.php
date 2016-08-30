<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="CoderDojo,CoderDojo Kashiwa,こーだーどーじょー,千葉,柏,プログラミング教室,小学生,中学生,プログラミング">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/flexslider.css">
	<link rel="stylesheet" type="text/css" href="style/formStyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="./script/jquery.flexslider.js"></script>
	

	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			$('.flexslider').flexslider({
				slideshowSpeed: 5000,
				animationSpeed: 1500,
				directionNav: false,
				});
		});
	</script>


	<script language="javascript" type="text/javascript">

 	function Display(no){
  
     	if(no == "no1"){
  
        	 document.getElementById("studentMentor-list").style.display = "block";
        	 document.getElementById("adultMentor-list").style.display = "none";
  
     	}else if(no == "no2"){
  
         	document.getElementById("studentMentor-list").style.display = "none";
         	document.getElementById("adultMentor-list").style.display = "block";
  
     	}
  
	 }

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
			<li><a href="./about.php">CoderDojoとは</a></li>
			<li><a href="./kashiwaDojo.php">柏の取り組み</a></li>
			<li><a href="./kashiwanoha.php">柏の葉Dojo</a></li>
			<li><a href="./join.php">参加する</a></li>	
			<li><a href="./mentor.php">メンター</a></li>
			<li><a href="./event.php">イベント</a></li>
		</ul>
	</div>

