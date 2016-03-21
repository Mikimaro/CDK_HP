<?php
	
	$studentMentorName = array("宮島 衣瑛", "加藤 遼", "鈴木 貴也", "飯島 巧", "牧野 翔", "北原 成貴", "米倉 幹麿", "成澤巧徒", "相良 亮","竹内 遥斗", "村脇 光洋", "福田 敏史", "梅田真妃留", "窪田碧唯");
	$adultMentorName = array("石原怜", "坂田健一", "間下知紀", "高松基広", "小野寺宣裕", "西村三千代", "小館直人");
	$studentMentorSkil = array(
		"Scratch / Swift / HTML, CSS / PHP",
		"Scratch / HTML, CSS",
		"Scratch",
		"Scratch",
		"Scratch",
		"映像",
		"映像 / HTML, CSS",
		"Scratch / 電気工作 / Java",
		"Scratch",
		"Scratch",
		"Scratch / Swift / JavaScript",
		"Scratch / Java",
		"Scratch",
		"Scratch"
	);

	$studentMentorDojo = array(
		"Kashiwa / Kashiwa-no-ha",
		"Kashiwa",
		"Kashiwa / Kashiwa-no-ha",
		"Kashiwa / Kashiwa-no-ha",
		"Kashiwa",
		"Kashiwa",
		"Kashiwa / Kashiwa-no-ha",
		"Kashiwa",
		"Kashiwa-no-ha",
		"Kashiwa-no-ha",
		"Kashiwa-no-ha",
		"Kashiwa-no-ha",
		"Kashiwa-no-ha",
		"Kashiwa-no-ha"
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
						for ($i=0; $i < count($studentMentorName); $i+=2) { 
							$imgNum = $i + 1;
							print("<li class='mentorListLI'>");
							if ($i == 1) {
								print("<img src='image/mentorImage/s{$imgNum}.png' class='mentorImg'>");
							}else{
								print("<img src='image/mentorImage/s{$imgNum}.jpg' class='mentorImg'>");
							}
							print("<div class='montorProfile'>");
							print("<p class='name'>{$studentMentorName[$i]}</p>");
							print("<p class='skil'>{$studentMentorSkil[$i]}</p>");
							print("<p class='belonging'>{$studentMentorDojo[$i]}</p>");
							print("</div>");
							print("</li>");

						}
					?>

				</ul>
			</div>

			<div class="mentorList-R">
				<ul class="mentorListUL">
					<?php
						for ($i=1; $i < count($studentMentorName); $i+=2) { 
							$imgNum = $i + 1;
							print("<li class='mentorListLI'>");
							if ($i == 1) {
								print("<img src='image/mentorImage/s{$imgNum}.png' class='mentorImg'>");
							}else{
								print("<img src='image/mentorImage/s{$imgNum}.jpg' class='mentorImg'>");
							}
							print("<div class='montorProfile'>");
							print("<p class='name'>{$studentMentorName[$i]}</p>");
							print("<p class='skil'>{$studentMentorSkil[$i]}</p>");
							print("<p class='belonging'>{$studentMentorDojo[$i]}</p>");
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