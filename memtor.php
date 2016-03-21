<?php
	$mentorData = array(
		0 => array(
			"name" => "宮島衣瑛",
			"en" => "Miyajima Kirie",
			"skil" => array(
				"Scratch", "Swift", "Web", "PHP"
			),
			"dojo" =>array(
				"Kashiwa / Kashiwa-no-ha"
			)
		),

		1 => array(
			"name" => "加藤遼",
			"en" => "Katou Haruka",
			"skil" => array(
				"Scratch", "Web"
			),
			"dojo" => array(
				"Kashiwa"
			)
		),

		2 => array(
			"name" => "鈴木貴也",
			"en" => "Suzuki Takaya",
			"skil" => array(
				"Scratch"
			),
			"dojo" => array(
				"Kashiwa / Kashiwa-no-ha"
			)
		),

		3 => array(
			"name" => "飯島巧",
			"en" => "Iijima Takumi",
			"skil" => array(
				"Scratch"
			),
			"dojo" => array(
				"Kashiwa / Kashiwa-no-ha"
			)
		),

		4 => array(
			"name" => "牧野翔",
			"en" => "Makino Syou",
			"skil" => array(
				"Scratch"
			),
			"dojo" => array(
				"Kashiwa"
			)
		),

		5 => array(
			"name" => "北原成貴",
			"en" => "Kitahara Masaki",
			"skil" => array(
				"映像"
			),
			"dojo" => array(
				"Kashiwa"
			)
		),

		6 => array(
			"name" => "米倉幹麿",
			"en" => "Yonekura Mikimaro",
			"skil" => array(
				"映像", "Scratch", "Web"
			),
			"dojo" => array(
				"Kashiwa / Kashiwa-no-ha"
			)
		),

		7 => array(
			"name" => "成澤巧徒",
			"en" => "Narisawa Takuto",
			"skil" => array(
				"Scratch", "電子工作", "Java"
			),
			"dojo" => array(
				"Kashiwa-no-ha"
			)
		),

		8 => array(
			"name" => "相良亮",
			"en" => "Sagara Ryou",
			"skil" => array(
				"Scratch"
			),
			"dojo" => array(
				"Kashiwa-no-ha"
			)
		),

		9 => array(
			"name" => "竹内遥斗",
			"en" => "Takeuchi Haruto",
			"skil" => array(
				"Scratch"
			),
			"dojo" => array(
				"Kashiwa-no-ha"
			)
		),

		10 => array(
			"name" => "村脇光洋",
			"en" => "Murawaki Mitsuhiro",
			"skil" => array(
				"Scratch", "Swift", "JavaScript"
			),
			"dojo" => array(
				"Kashiwa-no-ha"
			)
		),

		11 => array(
			"name" => "福田敏史",
			"en" => "Hukuda Toshihumi",
			"skil" => array(
				"Scratch", "Java"
			),
			"dojo" => array(
				"Kashiwa-no-ha"
			)
		),

		12 => array(
			"name" => "梅田真妃留",
			"en" => "Umeda Mahiru",
			"skil" => array(
				"Scratch"
			),
			"dojo" => array(
				"Kashiwa-no-ha"
			)
		),

		13 => array(
			"name" => "窪田碧唯",
			"en" => "Kubota Aoi",
			"skil" => array(
				"Scratch"
			),
			"dojo" => array(
				"Kashiwa-no-ha"
			)
		)

	);


	

	require_once 'header.php';


?>

<div id="container">

	<div id="mentor">

		<div id="pageTitle">

			<img src="#"  class="headerLogo" alt="">

			<h1 class="headline">メンター紹介</h1>

			<p class="headline">
				CoderDojo Kashiwa & Kashiwa-no-haのメンターを紹介します。
			</p>

		</div>

		<div class="mentor-list clearfix">

			<div class="mentorList-L">
				<ul class="mentorListUL">
					<?php
						for ($i=0; $i < count($mentorData); $i+=2) { 
							$imgNum = $i + 1;

							print("<li class='mentorListLI'>");
							if ($i == 1) {
								print("<img src='image/mentorImage/s{$imgNum}.png' class='mentorImg'>");
							}else{
								print("<img src='image/mentorImage/s{$imgNum}.jpg' class='mentorImg'>");
							}
							
							print("<div class='mentorProfile'>");
							print("<p class='name'>{$mentorData[$i]['name']}</p>");
							print("<p class='en'>{$mentorData[$i]['en']}</p>");
							for ($j=0; $j < count($mentorData[$i]['skil']); $j++) { 
								print("<p class='skil {$mentorData[$i]['skil'][$j]}'>{$mentorData[$i]['skil'][$j]}");
							}
							for ($j=0; $j < count($mentorData[$i]['dojo']); $j++) { 
								print("<p class='belonging'>{$mentorData[$i]['dojo'][$j]}");
							}
							print("</div>");
							print("</li>");	

						}
					?>
				</ul>
			</div>


			<div class="mentorList-R">
				<ul class="mentorListUL">
					<?php
						for ($i=1; $i < count($mentorData); $i+=2) { 
							$imgNum = $i + 1;

							print("<li class='mentorListLI'>");
							if ($i == 1) {
								print("<img src='image/mentorImage/s{$imgNum}.png' class='mentorImg'>");
							}else{
								print("<img src='image/mentorImage/s{$imgNum}.jpg' class='mentorImg'>");
							}
							
							print("<div class='mentorProfile'>");
							print("<p class='name'>{$mentorData[$i]['name']}</p>");
							print("<p class='en'>{$mentorData[$i]['en']}</p>");
							for ($j=0; $j < count($mentorData[$i]['skil']); $j++) { 
								print("<p class='skil {$mentorData[$i]['skil'][$j]}'>{$mentorData[$i]['skil'][$j]}");
							}
							for ($j=0; $j < count($mentorData[$i]['dojo']); $j++) { 
								print("<p class='belonging'>{$mentorData[$i]['dojo'][$j]}");
							}
							print("</div>");
							print("</li>");	

						}
					?>
					
				</ul>
			</div>

		</div>
	</div>
</div>

<?php
	require_once 'footer.php';
?>