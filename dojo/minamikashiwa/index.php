<?php
    $pageTitle = "Minami-Kashiwa";
    require_once "../common/header.php";
?>

<div id="container">
    <div class="pageTitle">
		<h1 class="headline">CoderDojo Minami-Kashiwa</h1>

		<p class="headline">
			この夏スタート。麗澤大学ではじまります。
		</p>

	</div>

    <br>

    <div id="dojoDetail">
        <div id="dojoDetailDescriptionTextArea">

            <img src="./images/logo.png" class="dojoDetailLogo">

            <ul class="dojoDetailUl">
                <li>名称：CoderDojo Minami-Kashiwa</li>
                <li>場所：<a href="http://www.reitaku-u.ac.jp/reitaku-campus/hanamizuki/facility.html" target="_blank">麗澤大学はなみずき</a></li>
                <li>住所：千葉県柏市光ケ丘団地１−１</li>
                <li>開催日：毎月第3土曜日</li>
                <li>対象：柏市近辺に住んでいるすべての小学3年生〜中学3年生</li>
                <li>定員：15名</li>
                
                <li>学べること：</li>
            </ul>

            <ul class="dojoDetailSkill">
                <li class="dojoDetailSkillScratch">Scratch</li>
            </ul>

            <a href="https://docs.google.com/forms/d/e/1FAIpQLScVURsntGO_qAk1KstgvBxpFn_RcQDbDy7vFPQgX5TpWf_xXQ/viewform" target="_blank" class="joinButton">参加する</a>

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

    <div id="dojomap">
        <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3234.697079515229!2d139.95282946526297!3d35.831907230159416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z6bqX5r6k5aSn5a2m44Gv44Gq44G_44Ga44GN!5e0!3m2!1sja!2sjp!4v1502769454476" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

</div>



<?php
    require_once "footer.php";
?>