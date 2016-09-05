<?php
	require_once 'header.php';

	$date = array(
		"2016年6月7日",
		"2016年5月31日",
		"2014年11月30日"
	);

	$title = array(
		"自分のレールは自分で敷いていく――10代実業家対談（後編） | WORK MILLにて椎木里佳(株式会社「AMF」代表取締役社長)と対談",
		"これからの社会を担う若者にとっての「はたらく」とは――10代実業家対談（前編） | WORK MILLにて椎木里佳(株式会社「AMF」代表取締役社長)と対談",
		"TEDxKids@Chiyodaにて「地域貢献型イノベーター」としてスピーチ"
	);

	$links = array(
		"http://workmill.jp/20160607_teen2.html",
		"http://workmill.jp/20160531_teen1.html",
		"https://www.youtube.com/watch?v=pvEbHI3estc"
	);


?>

<div id="container">

		<div id="founder">

			<div class="pageTitle nonImg">

				<h1 class="headline">運営について</h1>

				<p class="headline">

				CoderDojo Kashiwaの代表である宮島衣瑛の紹介です。

				</p>

			</div>

			<div id="mjk">

				<div class="founderImage">

					<img src="./image/mentorImage/s1.jpg">

				</div>

				<div class="mjkPro">

					<p class="founderName">宮島 衣瑛 / Kirie Miyajima</p>

					<p class="position">Co-Founder</p>

					<a href="https://twitter.com/mjk_0513" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false" data-dnt="true">Follow</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

					<p class="founderProfile">
						1997年5月13日生まれ<br>
						学習院大学文学部教育学科<br>
						高校1年生の春から地元である千葉県柏市でCoderDojo Kashiwaという小中学生向けのプログラミングDojoを主催・運営。 3年間で60回を超えるワークショップを開催しており、現在でも様々な場所で教えている。これらの経験を基にTEDxKids@Chiyoda2014に登壇し、自身の考えを発表した。2016年4月からは学習院大学文学部教育学科に進学し、より専門的に教育について学んでいる。
					</p>

				</div>

			</div>

			<div class="news">


		<?php
			for ($i=0; $i < 1; $i++) { 
				print("
					<div class='latest-newsArticle'>

						<div>

							<p class='date'>{$date[$i]}</p>

						</div>

							<h2 class='newsHead'>{$title[$i]}</p>

							<a href='{$links[$i]}' target='_blank'>記事を見る</a>

					</div>
				");
			}

			for ($i=1; $i < count($date); $i++) { 
				print("
					<div class='newsArticle'>

						<div>

							<p class='date'>{$date[$i]}</p>

						</div>

							<h2 class='newsHead'>{$title[$i]}</p>

							<a href='{$links[$i]}' target='_blank'>記事を見る</a>

					</div>
				");
			}
		?>


			</div>

		</div>

</div>

<?php
	require_once 'footer.php';
?>