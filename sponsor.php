<?php

$sponsorDataConpany = array(

	0 => array(
		"name" => "InnovationPower様",
		"url" => "",
		"type" => array("運営サポート", "活動サポート"),
		"dojo" => array("Kashiwa, Kashiwa-no-ha")
	),

	1 => array(
		"name" => "Noblesse Oblige様",
		"url" => "http://nbob.jp/",
		"type" => array("会場提供"),
		"dojo" => array("Kashiwa")
	), 

	2 => array(
		"name" => "Syun様",
		"url" => "http://syun.com/",
		"type" => array("活動サポート"),
		"dojo" => array("Kashiwa"),
	),

	3 => array(
		"name" => "KOIL様",
		"url" => "http://www.31ventures.jp/ventureoffice/koil/",
		"type" => array("会場提供"),
		"dojo" => array("Kashiwa-no-ha")
	),

	4 => array(
		"name" => "Oak Leaf Project様",
		"url" => "",
		"type" => array("活動サポート"),
		"dojo" => array("Kashiwa")
		)
);

$sponsorDataPerson = array(
	0 => array(
		"name" => "辻雄一郎様",
		"en" => "Tsuji Yuichirou",
		"type" => array("活動サポート"),
		"dojo" => array("Kashiwa")
		)
);
	require_once 'header.php';
?>


	<div id="container">

		<div class="pageTitle">
			<img src="./image/dojoLogo.png" class="headerLogo">
			<h1 class="headline">スポンサー</h1>

			<p class="headline">CoderDojo Kashiwaは以下の企業・個人の協力により運営されています。</p>

		</div>

		<div id="sponsor">
			
			<div class="sponsor-list clearfix">

				<ul class="sponsorListUL">

					<?php
						for ($i=0; $i < count($sponsorDataConpany); $i++) { 
							$imgNum = $i + 1;

							print("<li class='sponsorListLI'>");

							if ($i == 2) {
								print("<a href='{$sponsorDataConpany[$i]['url']}'><img src='image/sponsorImage/s{$imgNum}.gif' class='sponsorImg'></a>");
							}else{
								print("<a href='{$sponsorDataConpany[$i]['url']}'><img src='image/sponsorImage/s{$imgNum}.png' class='sponsorImg'></a>");
							}
							
							print("<div class='sponsorProfile'>");
							print("<p class='name'>{$sponsorDataConpany[$i]['name']}</p>");

							for ($j=0; $j < count($sponsorDataConpany[$i]['type']); $j++) { 
								print("<p class='type'>{$sponsorDataConpany[$i]['type'][$j]}");
							}
							for ($j=0; $j < count($sponsorDataConpany[$i]['dojo']); $j++) { 
								print("<p class='belonging'>{$sponsorDataConpany[$i]['dojo'][$j]}");
							}
							print("</div>");
							print("</li>");	

						}
					?>

					<?php
						for ($i=0; $i < count($sponsorDataPerson); $i++) { 

							$imgNum = $i + 1;
							print("<li class='sponsorListLI'>");
							
							print("<div class='sponsorProfile'>");
							print("<p class='name'>{$sponsorDataPerson[$i]['name']}</p>");
							print("<p class='en'>{$sponsorDataPerson[$i]['en']}</p>");

							for ($j=0; $j < count($sponsorDataPerson[$i]['type']); $j++) { 
								print("<p class='type'>{$sponsorDataPerson[$i]['type'][$j]}");
							}
							for ($j=0; $j < count($sponsorDataPerson[$i]['dojo']); $j++) { 
								print("<p class='belonging'>{$sponsorDataPerson[$i]['dojo'][$j]}");
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
	
</div>

<?php
	require_once 'footer.php';
?>