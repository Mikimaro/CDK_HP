<?php
	require_once 'header.php';
?>

<div id="container">

	<div class="pageTitle">

	<h1 class="headline">Real Time Documentation</h1>
		<p class="headline">大切な出来事はみんなで共有</p>

	</div>

	<div id="rtd">

		<div class="individual">

			<div class="aboutRTD title-of-top">

				<p class="title">RTD</p>

				<p class="text">
					RTD(Real Time Documentation)とは、ワークショップやイベントの出来事を映像で記録し、それらの終了時に編集・保存されたメディアとして公開できるパーソナルメディア活動です。<br>
				</p>

			</div>


			<div class="video">

				<p class="title">WORKS</p>

				<p class="text">私達の今まで作品の一部です。</p>

			</div>

		</div>

		<section class="rtdmovie">

			<article>

				<iframe width="736" height="414" src="https://www.youtube.com/embed/hC1NCcYpUFY" frameborder="0" allowfullscreen></iframe>

				<section>

					<p class="movieTitle">CoderDojoというコミュニティ - 子どもから大人までが集う、新しい学びの場 -</p>

					<p class="date">2017年12月23日</p>


					<p class="text">CoderDojoがどのようなコミュニティなのかについて迫ったドキュメンタリー映像です。</p>

				</section>

			</article>
			
		</section>

		<section class="movielist">


			<?php

					$URL = array(
						'https://www.youtube.com/embed/gLDue2xb1j8',
						'https://www.youtube.com/embed/XyOeJ7Uo9zA',
						"https://www.youtube.com/embed/TgHgKScWQp8",
						'https://www.youtube.com/embed/gUJqUK6oTwY',
						);

					$title = array(
						'あなたがDojoに来る理由は何ですか？',
						'Happy birthday CoderDojo! from CoderDojo Kashiwa',
						"CoderDojo Kashiwa Special Presentation Day 2017",
						'ScratchDay in Kashiwa 2016',
						
						);

					$date = array(
						'2016年12月24日',
						'2016年9月18日',
						"2017年12月23日",
						'2016年5月14日',
						
						);

					$text = array(
						'CoderDojoに参加する理由を聞きました。',
						'CoderDojoの誕生を祝いました。',
						"CoderDojo Kashiwaの年一度のニンジャのための発表の場所です。",
						'千葉県で初のScratchDay in Kashiwaが開催されました。',
						
						);


					for ($i=0; $i < count($URL); $i++) { 
						print("

				<article>

					<iframe width='560' height='315' src='{$URL[$i]}' frameborder='0' allowfullscreen></iframe>

					<section>

						<p class='movieTitle'>{$title[$i]}</p>

						<p class='date'>{$date[$i]}</p>


						<p class='text'>{$text[$i]}</p>

					</section>
					
				</article>

						");
					}
				?>

		</section>

		<p class="youtubelink">

		<a href="https://www.youtube.com/channel/UCB2CuGWflVkNSP0FD3E0fEA/videos"> CoderDojo Kashiwaのすべての動画を見る > </a>

		</p>
	</div>
	<br>
</div>

<?php
	require_once 'footer.php';