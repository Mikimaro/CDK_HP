<?php
    $pageTitle = "Kashiwa";
    require_once "../common/header.php";
?>

<div id="container">
    <div class="pageTitle">
		<h1 class="headline">CoderDojo Kashiwa</h1>

		<p class="headline">
			柏市内の中心となるDojoです。
		</p>

	</div>

    <br>

    <div id="dojoDetail">
        <div id="dojoDetailDescriptionTextArea">

            <img src="./images/logo.png" class="dojoDetailLogo">

            <ul class="dojoDetailUl">
                <li>名称：CoderDojo Kashiwa</li>
                <li>場所：<a href="http://nbob.jp/" target="_blank">Noblesse Oblige</a></li>
                <li>住所：千葉県柏市東上町2-28 第一水戸屋ビル3F</li>
                <li>開催日：毎月第2・4日曜日 10:00-12:00</li>
                <li>対象：柏市近辺に住んでいるすべての小学3年生〜中学3年生</li>
                <li>定員：23名</li>
                
                <li>学べること：</li>
            </ul>

            <ul class="dojoDetailSkill">
                <li class="dojoDetailSkillScratch">Scratch</li>
                <li class="dojoDetailSkillWeb">web</li>
                <li class="dojoDetailSkillDesign">デザイン</li>
            </ul>

            <a href="#" class="joinButton">参加する</a>

        </div>

        <div id="dojoDetailImageArea">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="./images/bg01.JPG" class="dojoDetailImage"></li>
                    <li><img src="./images/bg02.jpg" class="dojoDetailImage"></li>
                    <li><img src="./images/bg03.jpg" class="dojoDetailImage"></li>
                    <li><img src="./images/bg04.jpg" class="dojoDetailImage"></li>
                    <li><img src="./images/bg05.jpg" class="dojoDetailImage"></li>
                </ul>
            </div>

        </div>

       

    </div>

</div>



<?php
    require_once "footer.php";