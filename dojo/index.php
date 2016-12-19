<?php
							$class = array(
								'kashiwadojo',
								'kashiwanohadojo',
								'nagareyamadojo',

								);
							$img = array(
								'../image/dojoLogo.png',
								'../image/kashiwanohalogo.png',
								'../image/dojoLogo.png',
								);

							$title = array(
								'CoderDojo Kashiwa',
								'CoderDojo Kashiwa-no-ha',
								'CoderDojo Nagareyama',
								);

							$site = array(
								'@NoblesseOblige',
								'@KOILスタジオ',
								'@江戸川大学',
								);

							$comments = array(
								'毎月第2,4日曜日に開催',
								'毎月第3日曜日に開催',
								'毎月1回土曜日に開催',
								);

							$URL = array(
								'../index.php',
								'../kashiwanoha/',
								'http://www.code-for-nagareyama.org/?cat=11',
							);

	require_once 'header.php';
?>

<div id="container">

		
		<div class="pageTitle">
			<img src="../image/dojoLogo.png" class="headerLogo">
			<h1 class="headline">近くのCoderDojo</h1>

			<p class="headline">

				お近くにあるCoderDojoを紹介します。

			</p>

		</div>

		<div id="event">

		<div class="events">

			<h2 class="headline">柏市</h2>

			<section class="Kdojo-list">


			<?php

				for ($i=0; $i < 2; $i++) { 
						print("

				<article>

					<a href='{$URL[$i]}' class='black'>

					<div>

						<img src='{$img[$i]}' class='{$class[$i]}'>

					</div>

					<section class='eventText'>

						<h2>{$title[$i]}</h2>
						<h3>{$day[$i]}</h3>
						<h4>{$site[$i]}</h4>
						<h5>{$comments[$i]}</h5>

					</section>

					</a>

				</article>
						");
					}

			?>

			</section>

			<h2 class="headline">流山市</h2>

			<section class="Ndojo-list">

			<?php

				for ($i=2; $i < 3; $i++) { 
						print("

				<article>

				<a href='{$URL[$i]}' class='black'>

					<div>

						<img src='{$img[$i]}' class='{$class[$i]}'>

					</div>

					<section class='eventText'>

						<h2>{$title[$i]}</h2>
						<h3>{$day[$i]}</h3>
						<h4>{$site[$i]}</h4>
						<h5>{$comments[$i]}</h5>

					</section>

				</a>

				</article>
						");
					}

				?>

			</section>
			
		</div>

	</div>

</div>

<?php
	require_once '../footer.php';
?>