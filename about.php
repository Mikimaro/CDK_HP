<?php
	require_once 'header.php';
?>

<div id="container">

	<div id="mission">

		<div id="missionImageArea">
			<img src="./image/backgroundImage/BG.jpg" class="missionImage">
			<p class="titleUp">私たちのミッション</p>
			<p class="titleMiddle">市内のどこに住んでいても、プログラミングを学べる場所を提供する。</p>
		</div>

		<div id="missionMenu">
			<ul>
				<li><a href="#coderdojo">CoderDojoとは</a></li>
				<li><a href="#history">私たちの歴史</a></li>
				<li><a href="#project">プロジェクト</a></li>
			</ul>
		</div>

		<div id="about">
			<div id="coderdojo">
				<p class="missionTitle">CoderDojoとは</p>
				
				<div class="leftContents">
					<img src="./image/dojoLogo.png" class="missionLogo">
				</div>

				<div class="rightContents">

					<p class="missionText">
						CoderDojo は7〜17歳の子どもを対象にしたプログラミング道場です。2011年にアイルランドで始まり、世界では69カ国・1,200の道場、日本では全国に88以上の道場があります。<br>
						CoderDojoはプログラミング教室ではありません。子どもたちは自分のプロジェクトを完成させるためにDojoに来ます。<br>
						また、すべてのCoderDojoにおいて子どもたちの参加費は無料です。これはCoderDojo憲章にも書かれているとおり、CoderDojoは人種や性別、貧富の差によって学ぶ機会を制限することはないからです。<br>
						私たちの活動はすべて寄付によって成り立っています。
					</p>

					<ul>
						<li><a href="http://coderdojo.jp" target="_blank">CoderDojo Japanについて</a></li>
						<li><a href="http://coderdojo.chiba.jp" target="_blank">千葉県のCoderDojoについて</a></li>
						<li><a href="http://coderdojo.com" target="_blank">CoderDojo Foundationについて</a></li>
					</ul>

				</div>
				<!--
				<div class="missionVideoArea">
					<iframe width="90%" height="500" src="https://www.youtube.com/embed/gLDue2xb1j8?rel=0" frameborder="0" allowfullscreen class="missionVideo"></iframe>
				</div>
				-->
			</div>

			<div id="dojoInfo">
				<p class="missionTitle">数字で見る CoderDojo Kashiwa</p>
				<br>
					<div id="container dojoInfoMain">
						<div class="row">
							<div class="col-md-3 col-xs-6">
								<p class="dojoInfoTitle">述べ参加者数</p>
								<div class="dojoInfoIcon"><i class="fa fa-child" aria-hidden="true"></i></div>
								<p class="dojoInfoNum">2800+</p>
							</div>

							<div class="col-md-3 col-xs-6">
								<p class="dojoInfoTitle">開催回数</p>
								<div class="dojoInfoIcon"><i class="fa fa-hashtag" aria-hidden="true"></i></div>					
								<p class="dojoInfoNum">#96</p>
							</div>

							<div class="col-md-3 col-xs-6">
								<p class="dojoInfoTitle">メンターの数</p>
								<div class="dojoInfoIcon"><i class="fa fa-users" aria-hidden="true"></i></div>
								<p class="dojoInfoNum">30+</p>
							</div>

							<div class="col-md-3 col-xs-6">
								<p class="dojoInfoTitle">市内にあるDojoの数</p>
								<div class="dojoInfoIcon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
								<p class="dojoInfoNum">#4</p>
							</div>
							
						</div>
					</div>
					<br>
					<p class="dojoInfoDateLabel">2017年12月30日現在</p>
				</div>
	


							
			<div id="history">
				<p class="missionTitle">私たちの歴史</p>

				<!--<img src="./image/about/about01.jpg" class="aboutImage">-->

				<div id="aboutImageArea">
					<div class="flexslider">
						<ul class="slides">
							<li><img src="./image/about/about01.jpg" class="dojoDetailImage"></li>
							<li><img src="./image/about/about02.jpg" class="dojoDetailImage"></li>
							<li><img src="./image/about/about03.jpg" class="dojoDetailImage"></li>
							<li><img src="./image/about/about04.jpg" class="dojoDetailImage"></li>
							<li><img src="./image/about/about05.jpg" class="dojoDetailImage"></li>
							<li><img src="./image/about/about06.jpg" class="dojoDetailImage"></li>
							<li><img src="./image/about/about07.jpg" class="dojoDetailImage"></li>
						</ul>
					</div>
				</div>
				
				<p class="aboutText">#1から現在に至るまで、CoderDojo Kashiwaは日々成長し続けています。参加人数ははじめこそ4,5人だったものの、現在では毎回多くの子どもたちが参加してくれるようになりました。<br>また、この東葛地域にもDojoは増え続けています。皆CoderDojo Kashiwaから派生していったDojoです。</p>


			</div>

			<div id="project">
				<p class="missionTitle">プロジェクト</p>

				<div class="spd">

					<table border="0" class="missionTable">
						<tr>
							<td class="missionTdL">
								<img src="./image/eventLogos/spd2017.png" class="missionLogoSpd">
							</td>

							<td class="missionTdR">
								<p class="missionSubTitle">Special Presentation Day</p>
								<p class="missionText">
									年に一度の発表会です。子どもたちが作った作品を自分自身で発表します。
								</p>
								<a href="event/spd/" target="_blank">Special Presentation Day について更に詳しく</a>
							</td>
						</tr>
					</table>

				</div>

				<div class="scratchday">
					
					<table border="0" class="missionTable">
						<tr>
							<td class="missionTdL">
								<img src="./image/sdklogo.png" class="missionLogo">
							</td>

							<td class="missionTdR">
								<p class="missionSubTitle">ScratchDay in Kashiwa</p>
								<p class="missionText">
									ScratchDayとは、MITメディアラボLLKグループが開発したプログラミングツールであるScratchの誕生日を祝うイベントです。毎年5月に全世界同時に行われています。<br>
									柏では2016年からScratchDayを開催しています。初心者向けのワークショップやShow&Tellなど、はじめて来てもらう人も楽しめるイベントになっています。
								</p>
								<a href="http://scratchday-kashiwa.org" target="_blank">ScratchDayについて更に詳しく</a>
							</td>
						</tr>
						
					</table>

				</div>
				
				<div class="kashiwacity">

					<table border="0" class="missionTable">
						<tr>
							<td class="missionTdL">
								<img src="./image/kashiwacity.png" class="missionLogo">
							</td>

							<td class="missionTdR">

								<p class="missionSubTitle">柏市プログラミング教育</p>
								<p class="missionText">
									柏市では2017年4月から市内にある42校すべての小学校でプログラミング教育をスタートしました。私たちはカリキュラム提供とアドバイザーという役目で協力しています。<br>
									学校で体験するのはあくまでも入門です。プログラミングを体験して、さらに深めたいと思った子どもたちをCoderDojo Kashiwaは全力でサポートします。
								</p>

								<a href="./project/kashiwaprogram/">CoderDojo Kashiwa と柏市教育委員会の取り組みについて更に詳しく</a>

								<br>
								
							</td>
						</tr>
						
					</table>

				</div>


			</div>

		</div>
	</div>

<br>


</div>

<?php
	require_once 'footer.php';
?>