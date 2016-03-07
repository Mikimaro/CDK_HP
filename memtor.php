<?php
	
	$studentMentorName = array("宮島 衣瑛", "加藤 遼", "鈴木 貴也", "飯島 巧", "牧野 翔", "北原 成貴", "米倉 幹麿", "相良 亮","竹内 遥斗", "村脇 光洋", "福田 敏史", "まきろに", "あをさん");
	$adultMentorName = array("石原怜", "坂田健一", "間下知紀", "高松基広", "小野寺宣裕", "西村三千代", "小館直人");



	require_once 'header.php';


?>

<div id="conteiner">
	
	<h1 class="text">メンター</h1>

	<p class="text">
		CoderDojo Kashiwa & Kashiwa-no-haのメンターを紹介します。
	</p>

	<table border="1">

	<?php

		for ($i=0; $i < count($studentMentorName); $i+=2) { 
			print("<tr><td class='tdL'>{$studentMentorName[$i]}</td><td class='tdR'>{$studentMentorName[$i+1]}</td></tr>");
		}
	?>

	</table>

</div>

<?php
	require_once 'footer.php';
?>