<?php
    $pageTitle = "Kashiwa";
    require_once "header.php";
?>

<div id="container">
    <div class="pageTitle">
		<h1 class="headline">CoderDojo Minami-Kashiwa</h1>

		<p class="headline">
			柏市内の中心となるDojoです。
		</p>

	</div>

    <br>

    <div id="dojoDetail">
        <div id="dojoDetailDescriptionTextArea">

            <img src="./images/logo.png" class="dojoDetailLogo">

            <ul class="dojoDetailUl">
                <li>名称：CoderDojo Minami-Kashwia</li>
                <li>場所：<a href="http://nbob.jp/" target="_blank"></a></li>
                <li>住所：千葉県柏市</li>
                <li>開催日：</li>
                <li>対象：柏市近辺に住んでいるすべての小学3年生〜中学3年生</li>
                <li>定員：</li>
                
                <li>学べること：</li>
            </ul>

            <ul class="dojoDetailSkill">
                <li class="dojoDetailSkillScratch">Scratch</li>
                <li class="dojoDetailSkillWeb">web</li>
            </ul>

            <a href="#" class="joinButton">参加する</a>

        </div>

        <div id="dojoDetailImageArea">
            <img src="./images/bg01.jpg" width="100%" class="dojoDetailImage">
        </div>

       

    </div>

</div>



<?php
    require_once "footer.php";