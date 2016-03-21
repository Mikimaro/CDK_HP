<?php
	$mentorData = array(
		0 => array(
			"name" => "宮島衣瑛",
			"skil" => array(
				"Scratch", "Swift", "HTML, CSS", "PHP"
			),
			"dojo" =>array(
				"Kashiwa", "Kashiwa-no-ha"
			)
		),

		1 => array(
			"name" => "加藤遼",
			"skil" => array(
				"Scratch", "HTML, CSS"
			),
			"dojo" => array(
				"Kashiwa"
			)
		),

		2 => array(
			"name" => "鈴木貴也",
			"skil" => array(
				"Scratch"
			),
			"dojo" => array(
				"Kashiwa", "Kashiwa-no-ha"
			)
		),

		3 => array(
			"name" => "飯島巧",
			"skil" => array(
				"Scratch"
			),
			"dojo" => array(
				"Kashiwa", "Kashiwa-no-ha"
			)
		),

		4 => array(
			"name" => "牧野翔",
			"skil" => array(
				"Scratch"
			),
			"dojo" => array(
				"Kashiwa"
			)
		),

		5 => array(
			"name" => "北原成貴",
			"skil" => array(
				"映像"
			),
			"dojo" => array(
				"Kashiwa"
			)
		),

		6 => array(
			"name" => "米倉幹麿",
			"skil" => array(
				"映像", "Scratch", "HTML, CSS"
			),
			"dojo" => array(
				"Kashiwa", "Kashiwa-no-ha"
			)
		),

		7 => array(
			"name" => "相良亮",
			"skil" => array(
				"Scratch"
			),
			"dojo" => array(
				"Kashiwa-no-ha"
			)
		),

		8 => array(
			"name" => "竹内遥斗",
			"skil" => array(
				"Scratch"
			),
			"dojo" => array(
				"Kashiwa-no-ha"
			)
		),

		9 => array(
			"name" => "村脇光洋",
			"skil" => array(
				"Scratch", "Swift", "JavaScript"
			),
			"dojo" => array(
				"Kashiwa-no-ha"
			)
		),

		10 => array(
			"name" => "福田敏史",
			"skil" => array(
				"Scratch", "Java"
			),
			"dojo" => array(
				"Kashiwa-no-ha"
			)
		),

		11 => array(
			"name" => "梅田真妃留",
			"skil" => array(
				"Scratch"
			),
			"dojo" => array(
				"Kashiwa-no-ha"
			)
		),

		12 => array(
			"name" => "窪田碧唯",
			"skil" => array(
				"Scratch"
			),
			"dojo" => array(
				"Kashiwa-no-ha"
			)
		),

		13 => array(
			"name" => "成澤巧徒",
			"skil" => array(
				"Scratch", "電子工作", "Java"
			),
			"dojo" => array(
				"Kashiwa-no-ha"
			)
		)

	);
/*	
	$studentMentorName = array("宮島 衣瑛", "加藤 遼", "鈴木 貴也", "飯島 巧", "牧野 翔", "北原 成貴", "米倉 幹麿", "相良 亮","竹内 遥斗", "村脇 光洋", "福田 敏史", "梅田真妃留", "窪田碧唯", "成澤巧徒");
	$adultMentorName = array("石原怜", "坂田健一", "間下知紀", "高松基広", "小野寺宣裕", "西村三千代", "小館直人");
	$studentMentorSkil = array(
		"Scratch / Swift / HTML, CSS / PHP",
		"Scratch / HTML, CSS",
		"Scratch",
		"Scratch",
		"Scratch",
		"映像",
		"映像 / HTML, CSS",
		"Scratch",
		"Scratch",
		"Scratch / Swift / JavaScript",
		"Scratch / Java",
		"Scratch",
		"Scratch",
		"Scratch / 電気工作 / Java"
	);



	$studentMentorDojo = array(
		"Kashiwa / Kashiwa-no-ha",
		"Kashiwa",
		"Kashiwa / Kashiwa-no-ha",
		"Kashiwa / Kashiwa-no-ha",
		"Kashiwa",
		"Kashiwa",
		"Kashiwa / Kashiwa-no-ha",
		"Kashiwa-no-ha",
		"Kashiwa-no-ha",
		"Kashiwa-no-ha",
		"Kashiwa-no-ha",
		"Kashiwa-no-ha",
		"Kashiwa-no-ha",
		"Kashiwa"
	);


*/

	require_once 'header.php';


?>

<div id="conteiner">

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
							
							print("<div class='montorProfile'>");
							print("<p class='name'>{$mentorData[$i]['name']}</p>");
							for ($j=0; $j < count($mentorData[$i]['skil']); $j++) { 
								print("<p class='skil'>{$mentorData[$i]['skil'][$j]}");
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
							
							print("<div class='montorProfile'>");
							print("<p class='name'>{$mentorData[$i]['name']}</p>");
							for ($j=0; $j < count($mentorData[$i]['skil']); $j++) { 
								print("<p class='skil'>{$mentorData[$i]['skil'][$j]}");
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