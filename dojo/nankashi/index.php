<?php
    $pageTitle = "Minami-Kashiwa";
    require_once "../common/header.php";
?>

<div id="container">
    <div class="pageTitle">
		<h1 class="headline">CoderDojo Minami-Kashiwa</h1>

		<p class="headline">
			この夏スタート。柏の中でも重要なDojoのひとつです。
		</p>

	</div>

    <br>

    <div id="dojoDetail">
        <div id="dojoDetailDescriptionTextArea">

            <img src="./images/logo.png" class="dojoDetailLogo">

            <ul class="dojoDetailUl">
                <li>名称：CoderDojo Minami-Kashiwa</li>
                <li>場所：<a href="#" target="_blank">調整中</a></li>
                <li>住所：調整中</li>
                <li>開催日：調整中</li>
                <li>対象：柏市近辺に住んでいるすべての小学3年生〜中学3年生</li>
                <li>定員：調整中</li>
                
                <li>学べること：</li>
            </ul>

            <ul class="dojoDetailSkill">
                <li class="dojoDetailSkillScratch">Scratch</li>
            </ul>

            <a href="#" class="joinButton">参加する</a>

        </div>

        <div id="dojoDetailImageArea">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="./images/bg01.jpg" class="dojoDetailImage"></li>
                    <!-- li要素を追加すれば勝手にスライドしてくれる -->
                </ul>
            </div>
        </div>

       

    </div>

</div>



<?php
    require_once "footer.php";
?>