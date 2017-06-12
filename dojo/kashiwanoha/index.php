<?php
    $pageTitle = "Kashiwa-no-ha";
    require_once "../common/header.php";
?>

<div id="container">
    <div class="pageTitle">
		<h1 class="headline">CoderDojo Kashiwa-no-ha</h1>

		<p class="headline">
			市内2つ目、北部地域の拠点となるDojoです。
		</p>

	</div>

    <br>

    <div id="dojoDetail">
        <div id="dojoDetailDescriptionTextArea">

            <img src="./images/logo.png" class="dojoDetailLogo">

            <ul class="dojoDetailUl">
                <li>名称：CoderDojo Kashiwa</li>
                <li>場所：<a href="http://www.31ventures.jp/ventureoffice/koil/" target="_blank">KOILスタジオ</a></li>
                <li>住所：千葉県柏市若柴178 番地4柏の葉キャンパス148 街区2 ショップ＆オフィス棟６階</li>
                <li>開催日：毎月第3日曜日 10:00-12:00</li>
                <li>対象：柏市近辺に住んでいるすべての小学3年生〜中学3年生</li>
                <li>定員：25名</li>
                
                <li>学べること：</li>
            </ul>

            <ul class="dojoDetailSkill">
                <li class="dojoDetailSkillScratch">Scratch</li>
                <li class="dojoDetailSkillRaspi">Raspberry Pi</li>
                <li class="dojoDetailSkillDesign">デザイン</li>
            </ul>

            <a href="#" class="joinButton">参加する</a>

        </div>

        <div id="dojoDetailImageArea">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="./images/bg01.jpg" class="dojoDetailImage"></li>
                    <li><img src="./images/bg02.jpg" class="dojoDetailImage"></li>
                    <li><img src="./images/bg03.jpg" class="dojoDetailImage"></li>
                    <li><img src="./images/bg04.jpg" class="dojoDetailImage"></li>
                </ul>
            </div>
        </div>

       

    </div>

</div>



<?php
    require_once "../footer.php";