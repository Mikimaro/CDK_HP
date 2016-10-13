<?php
	require_once 'header.php';
?>

<div id="container">

	<div class="pageTitle">

		<img src="./image/dojoLogo.png" class="headerLogo">
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

				<iframe width="736" height="414" src="https://www.youtube.com/embed/Ct8EKh8xXWQ" frameborder="0" allowfullscreen></iframe>

				<section>

					<p class="movieTitle"> #65 CoderDojo Kashiwa</p>

					<p class="date">2016年8月28日</p>


					<p class="text">第65回CoderDojo Kashiwaが開催されました。</p>

				</section>

			</article>
			
		</section>

		<section class="movielist">


			<?php

					$URL = array(
						'https://www.youtube.com/embed/XyOeJ7Uo9zA',
						'https://www.youtube.com/embed/gUJqUK6oTwY',
						'https://www.youtube.com/embed/ScEu7O4y6cY',
						'https://www.youtube.com/embed/Eoh7vvCJORc',
						);

					$title = array(
						'Happy birthday CoderDojo! from CoderDojo Kashiwa',
						'ScratchDay in Kashiwa 2016',
						'Special Presentation Day 2015',
						'柏の葉で学ぼう。',
						);

					$date = array(
						'2016年9月18日',
						'2016年5月14日',
						'2015年12月20日',
						'2016年10月',
						);

					$text = array(
						'CoderDojoの誕生を祝いました。',
						'千葉県で初のScratchDay in Kashiwaが開催されました。',
						'年に1度の子供たちによる、作品発表会が開催されました。',
						'CoderDojo Kashiwa-no-haのPR映像が公開されました。',
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