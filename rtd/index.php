<?php
	
	$width = 420;
	$height = 315;

	$videoName = [
				 'CoderDojo Kashiwa-no-ha #3',
				 'CoderDojo Kashiwa #52',
				 'CoderDojo Kashiwa #41',
				 'ScratchDay in Tokyo 2015',
			 	 '逃走中 @柏市立旭東小学校',
			 	 'コワーキングスペース卓球大会 @KOIL',
			 	 'CoderDojo Kashiwa #31',
			 	 'Special Presentation Day 2014',
			 	 'CoderDojo Kashiwa #27',
			 	 'CoderDojo Kashiwa #26',
			 	 'CoderDojo Kashiwa #25',
			 	 'CoderDojo Kashiwa #24'
	];
	
	$videolink = [
				'<iframe src="https://www.youtube.com/embed/KwBxwE5Ln1E" frameborder="0" allowfullscreen></iframe>',
				'<iframe src="https://www.youtube.com/embed/MQ1Cm3XJ6PA" frameborder="0" allowfullscreen></iframe>',
				'<iframe src="https://www.youtube.com/embed/xk4ki96TQd4" frameborder="0" allowfullscreen></iframe>',
				'<iframe src="https://www.youtube.com/embed/uiSuNz3h-Oc" frameborder="0" allowfullscreen></iframe>',
				  '<iframe src="https://www.youtube.com/embed/glh1OO1lSxg" frameborder="0" allowfullscreen></iframe>',
				  '<iframe src="https://www.youtube.com/embed/lvSgEa-cQcA" frameborder="0" allowfullscreen></iframe>',
				  '<iframe src="https://www.youtube.com/embed/MAoUMsvHIIE" frameborder="0" allowfullscreen></iframe>',
				  '<iframe src="https://www.youtube.com/embed/IWdHQiJmK44" frameborder="0" allowfullscreen></iframe>',
				  '<iframe src="https://www.youtube.com/embed/C7DlH0fdAZs" frameborder="0" allowfullscreen></iframe>',
				  '<iframe src="https://www.youtube.com/embed/xI5kekHSk8k" frameborder="0" allowfullscreen></iframe>',
				  '<iframe src="https://www.youtube.com/embed/s_HYGCKtcaM" frameborder="0" allowfullscreen></iframe>',
				  '<iframe src="https://www.youtube.com/embed/d75iKbWffL8" frameborder="0" allowfullscreen></iframe>'
	];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>RTDTEAM</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('a[href^=#]').click(function() {
                var speed = 700;
                var href= $(this).attr("href");
               	var target = $(href == "#" || href == "" ? 'html' : href);
                var position = target.offset().top-60;
                $('body,html').animate({scrollTop:position}, speed, 'swing');
                	return false;
                });
            });
	</script>
</head>

<body>
	<div id="menu">
		<ul>
			<a href="#header"><li class="right"><img src="img/logo.png" width="140" height="30"></li></a>
			<a href="#about"><li>About</li></a>
			<a href="#work"><li>Project</li></a>
			<a href="#member"><li>Member</li></a>
			<a href="#contact"><li>Contact</li></a>
		</ul>
	</div>
	
	<div id="container">

		<div id="header">
			<p class="big">Real Time Video</p>
		</div>
		<div id="title">
			<p class="title">時代のニーズにあったメディアです</p>
			<p class="subTitle">小さなワークショップから大規模なイベントまで。</p>
		</div>

		<br>

		<div id="about">
			<p class="title">About</p>
			<p class="text">
			RTV(Real Time Video)とは、ワークショップやイベントの出来事を映像で記録し、それらの終了時に編集・保存されたメディアとして公開できるパーソナルメディア活動です。<br>
			私たちの日々の活動は地域内にとどまらず、日本国内のワークショップから世界規模のイベントまで、様々なところで活躍の場を広げています。<br>
			私たちの活動は2014年から始まりました。未だ未知の領域があります。しかし、私たちは映像の可能性をこの目で見てみたいのです。<br>
			そのために私たちは前進を続けていきます。
			</p>
		</div>

		<br>

		<div id="work">
		<p class="title">Project</p>
		<table border="0">
			<tr>
			<?php
				$count = 0;
				$videoNameCount = 0;
				$videoLinkCount = 0;
				
				for ($i=0; $i < 4; $i++) { 
					for ($j=0; $j < 3; $j++) { 
						print("<tr>");
						for ($l=0; $l < 3; $l++) { 
							print("<td>{$videolink[$videoLinkCount]}</td>");
							$videoLinkCount++;
						}
						print("</tr><tr>");
						for ($k=0; $k < 3; $k++) { 
							print("<td>{$videoName[$videoNameCount]}</td>");
							$videoNameCount++;
						}
						print("</tr>");
					}
				}

			?>
			</tr>
		</table>

		<p class="center"><a href="https://www.youtube.com/channel/UCB2CuGWflVkNSP0FD3E0fEA/videos" target="_blank">Watch more videos</a></p>

		</div>

		<br>

		<div id="member">
			<p class="title">Member</p>
			<table border="0" class="memberTable">
				<tr><td><img src="img/person/kitahara.jpg" class="person"><br>Masaki Kitahara<br>Editor</td><td><img src="img/person/yonekura.jpg" class="person"><br>Mikimaro Yonekura<br>Videographer</td><td><img src="img/person/miyajima.jpg" class="person"><br>Kirie Miyajima<br>Producer</td></tr>
				<tr><td class="description">1997年5月生まれ。高校3年生。<br>RTDチーム編集担当。</td><td class="description">1997年5月生まれ。高校3年生。<br>RTDチーム リーダー</td><td class="description">1997年5月生まれ。高校3年生。<br>CoderDojo Kashiwa代表。</td></tr>

				<tr><td class="description"><a href="https://twitter.com/kitakitrtd" target="_blank"><img src="img/twitter.png" widht="25px" height="25px"></a></td>
				<td class="description"><a href="https://twitter.com/Yonekura05"  target="_blank"><img src="img/twitter.png" widht="25px" height="25px"></a></td>
				<td class="description"><a href="https://twitter.com/mjk_0513"  target="_blank"><img src="img/twitter.png" widht="25px" height="25px"></a></td></tr>
			</table>
		</div>

		<br>

		<div id="contact">
			<p class="title">Contact</p>
			<p class="text">
				お仕事のご依頼等はこちらまでお願い致します。<br>
				coderdojo-kashiwa☆gmail.com（☆を@に変えて送信）
			</p>
		</div>
		<a href="https://twitter.com/share" class="twitter-share-button" data-via="C_D_Kashiwa" data-hashtags="CoderDojoKashiwa">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<div id="footer">
			<p class="text"><a href="http://www.coderdojo-kashiwa.com">CoderDojo Kashiwa</a> > <a href="">RTD</a></p>
			<hr>
			<p class="footer">Copyright(C)2015 CoderDojo Kashiwa RTD TEAM</p>
		</div>
	</div>


</body>