<?php
	require_once "header.php";
	require_once "eventsMenu.php";
?>

	<div id="contents">
		<div id="done">

			<section class="eventContents">

				<div class="details">

					<p class="title">
						ScratchDay 2017 in Kashiwa
					</p>

					<p class = "text">
						柏市では今年から 『<a href="https://scratch.mit.edu/about">Scratch</a>』を用いたプログラミンの授業がスタートします。<br>
						ScratchDayでは『Scratch』を使ったゲームを作るワークショップやCoderDojo Kashiwaに来ている子どもたち、教えている大人（メンター）による作品発表の場があります。<br>
						この機会に『Scratch』に一足先に触れてみませんか。<br>
						もちろん参加費はかかりません。

						<br><br>※当日参加される方は必ずスリッパ等をご用意ください。

					</p> 

				</div>
				
			</section>

			<section class="eventContents">
				<div class="details">
					<p class="title">
						プログラム
					</p>

					<p class="text">
						ScratchDay 2017 in Kashiwaで行うワークショップやイベントを紹介します。
					</p>

				</div>

				<section class="programs">

					<div class="event" id="childws">
						<p class="subtitle">
							子ども向けプログラミング<br>体験ワークショップ
						</p>

						<p class="event-text">
							初めてのプログラミングを体験しよう。<br>
							（※予約可能。当日枠もあります。）
						</p>

						<a href="workshop-students.php" class="event-link">詳細を見る</a>

					</div>

					<div class="event" id="hackathon">

						<p class="subtitle">
							Scratchハッカソン
						</p>

						<p class="event-text">
							１日を通して１つのテーマに沿った作品を作ってみよう。
						</p>

						<a href="hackathon.php" class="event-link">詳細を見る</a>

					</div>

					<div class="event" id="activity">

						<p class="subtitle">
							体育館アクティビティ
						</p>

						<p class="event-text">
							自分の体を使って、プログラミングをしてみよう。
						</p>

						<a href="activity.php" class="event-link">詳細を見る</a>

					</div>

					<div class="event" id="st">
						<p class="subtitle">
							Show & Tell
						</p>

						<p class="event-text">
							作品発表とゲストとのトークセッションを開催。
						</p>

						<a href="showandtell.php" class="event-link">詳細を見る</a>

					</div>

					<div class="event" id="adultws">
						<p class="subtitle">
							大人向けプログラミング<br>体験ワークショップ
						</p>

						<p class="event-text">
							Scratchは子供だけが楽しめるツールではありません。<br>
							大人も楽しめるScratchの可能性を体験してみませんか。
						</p>

						<a href="workshop-adults.php" class="event-link">詳細を見る</a>

					</div>

					<div class="event" id="tt">

						<p class="event-title">
							Touch & Try
						</p>

						<p class="event-text">
							Scratchと他の機器を使った、他とは違う体験をすることができます。
						</p>

						<a href="touchandtry.php" class="event-link">詳細を見る</a>

					</div>

					<div class="event" id="ts">

						<p class="event-title">
							トークセッション
						</p>

						<p class="event-text">
							ゲストとのトークセッションをお届けします。
						</p>

						<a href="talksession.php" class="event-link">詳細を見る</a>

					</div>

				</section>
			</section>

		</div>

		<div id="maps">
			<section class="eventContents">
				<p class="title">会場までの地図</p><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3233.351976944899!2d139.96254639466366!3d35.86489039083916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60189cee138493eb%3A0x85b1dbc28d09394b!2z5p-P5biC56uL5p-P5Lit5a2m5qCh!5e0!3m2!1sja!2sus!4v1492674434363" width="80%" height="450" frameborder="0" style="border:0; margin-left:10%; margin-right:10%;" allowfullscreen></iframe>
				<br><br>
				<p class="text" class="center">
					住所：千葉県柏市明原４丁目１−１<br>
					当日はなるべく公共交通機関をご利用ください。
				</p>
				<br>
			</section>
		</div>


		<!--
		ここに、当日のタイムテーブルを表示する。
			-->

		<div class="advertiseContents">
			<section class="eventContents">
				<p class="title">広報物</p><br>
				<p class="center">フライヤー、当日パンフレットなどをダウンロードできます。</p>
				<a href="advertise.php"><img src="./image/download.png" class="imageCenter"></a>
			</section>
		</div>


		<div class="sponsorContents">

			<p class="sponsorName">
				【主催】<br>
				ScratchDay in Kashiwa 実行委員会（<a href="member.php">メンバーを見る</a>)
			</p>

			<p class="sponsorName">
				【共催】<br>
				<a href="http://coderdojo-kashiwa.com" target="_blank">CoderDojo Kashiwa</a>　/　<a href="http://www.city.kashiwa.lg.jp/kashiwa_boe/" target="_blank">柏市教育委員会</a>
			</p>
			<p class="sponsorName">
				【後援】<br>
				<a href="http://www.kashiwa-pta.com/" target="_blank">柏市PTA連絡協議会</a>　/　
				<a href="http://innovation-power.xyz" target="_blank">InnovationPower Co.,Ltd</a>
			</p>

			<p class="random">順不同・敬称省略</p>
			
		</div>

	</div>


<?php
	require_once "footer.php";