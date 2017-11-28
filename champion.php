<?php
	require_once 'header.php';

	$date = array(
		"2017年10月10日",
		"2016年6月7日",
		"2016年5月31日",
		"2014年11月30日"
	);

	$title = array(
		"次世代の働き方に直面する、学生がすべき3つのこと | “SEA DAY 03” 開催レポート [Day1-03] 次世代を担う若者たちの働き方～テクノロジー×教育がもたらす未来～",
		"自分のレールは自分で敷いていく――10代実業家対談（後編） | WORK MILLにて椎木里佳(株式会社「AMF」代表取締役社長)と対談",
		"これからの社会を担う若者にとっての「はたらく」とは――10代実業家対談（前編） | WORK MILLにて椎木里佳(株式会社「AMF」代表取締役社長)と対談",
		"TEDxKids@Chiyodaにて「地域貢献型イノベーター」としてスピーチ"
	);

	$summary = array(
		"デジタル・ネイティブとは、2つ以上のデジタルツールを使って問題解決できること」と定義しており、「大学生がじっくりと習得できる最後のチャンス」だと力説...",
		"「やりたいことを自分で仕事にしていく」という意識の有無で、進路に対する考え方にはかなり差異が出てくると思います...",
		"今や、仕事や起業は「大人だけができること」ではありません。大学生が在学中に起業することは珍しくなく、それが世界的な大企業に成長する事例も存在します。...",
		"",
	);	

	$links = array(
		"http://workmill.jp/sea/report/seaday03_03.html",
		"http://workmill.jp/20160607_teen2.html",
		"http://workmill.jp/20160531_teen1.html",
		"https://www.youtube.com/watch?v=pvEbHI3estc"
	);

	$show = array(
		"記事",
		"記事",
		"動画"
	);


?>

<div id="container">


			<div class="pageTitle">

				<img src="./image/dojoLogo.png" class="headerLogo">

				<h1 class="headline">CoderDojo Kashiwaの運営について</h1>

				<p class="headline">

				CoderDojo Kashiwaの代表である宮島衣瑛の紹介です。

				</p>

			</div>

			<div id="founder">

			<div id="mjk">

				<div class="founderImage">

					<img src="./image/mentorImage/s1.jpg">

				</div>

				<section class="mjkPro">

					<div class="nameLabel">

					<p class="founderName">宮島 衣瑛 / Kirie Miyajima</p>

					<p class="position">Champion</p>

					<a href="https://twitter.com/mjk_0513" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false" data-dnt="true">Follow</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

					</div>

					<p class="founderProfile">
						1997年5月13日生まれ<br>
						学習院大学文学部教育学科<br>
						高校1年生の春から地元である千葉県柏市でCoderDojo Kashiwaという小中学生向けのプログラミングDojoを主催・運営。 3年間で60回を超えるワークショップを開催しており、現在でも様々な場所で教えている。これらの経験を基にTEDxKids@Chiyoda2014に登壇し、自身の考えを発表した。2016年4月からは学習院大学文学部教育学科に進学し、より専門的に教育について学んでいる。
					</p>

				</section>

			</div>

		<div id="media">


		<?php
			for ($i=0; $i < 1; $i++) { 
				print("
					<section class='latest-newsArticle'>

						<div class='news-Text'>
						
							<p class='date'>{$date[$i]}</p>


							<h2 class='newsHead'>{$title[$i]}</h2>

							<p class='summary'>{$summary[$i]}</p>

							<a href='{$links[$i]}' target='_blank'>記事を見る</a>

						</div>


					</section>
				");
			}

			for ($i=1; $i < count($date); $i++) { 
				print("
					<section class='newsArticle'>

						<div class='news-Text'>

							<p class='date'>{$date[$i]}</p>


							<h2 class='newsHead'>{$title[$i]}</h2>

							<p class='summary'>{$summary[$i]}</p>

							<a href='{$links[$i]}' target='_blank'>記事を見る</a>

						</div>

					</section>
				");
			}
		?>


			</div>

		</div>

</div>

<?php
	require_once 'footer.php';
?>