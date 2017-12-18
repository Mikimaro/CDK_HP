<?php
    $pageTitle = "Shounan-machi";
    require_once "../common/header.php";
?>

<div id="container">
    <div class="pageTitle">
		<h1 class="headline">CoderDojo Kashiwa-Shounan</h1>

		<p class="headline">
			旧沼南町エリアでスタートしたDojoです。
		</p>

	</div>

    <br>

    <div id="dojoDetail">
        <div id="dojoDetailDescriptionTextArea">

            <img src="./images/logo.png" class="dojoDetailLogo">

            <ul class="dojoDetailUl">
                <li>名称：CoderDojo Kashiwa-Shounan</li>
                <li>場所：<a href="#dojomap">訪問看護ステーションひまわり</a></li>
                <li>住所：柏市大井1849-14</li>
                <li>開催日：不定期開催</li>
                <li>対象：柏市近辺に住んでいるすべての小学3年生〜中学3年生</li>
                <li>定員：10名</li>
                
                <li>学べること：</li>
            </ul>

            <ul class="dojoDetailSkill">
                <li class="dojoDetailSkillScratch">Scratch</li>
            </ul>

            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdhhB7CxDHw7bGdShH0UI4kUQCrQls235YPjpunVc7r0xV82Q/viewform" target="_blank" class="joinButton">参加する</a>

        </div>

        <div id="dojoDetailImageArea">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="./images/bg01.png" class="dojoDetailImage"></li>
                    <!-- li要素を追加すれば勝手にスライドしてくれる -->
                </ul>
            </div>
        </div>
    </div>

    <div id="dojomap">
        <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3234.1644117519445!2d140.00473101528706!3d35.84497188015647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601882c77bf55161%3A0xfa1291e2246fcde2!2z6Kiq5ZWP55yL6K2344K544OG44O844K344On44Oz44Gy44G-44KP44KK!5e0!3m2!1sja!2sjp!4v1498368632830" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

</div>



<?php
    require_once "../footer.php";
?>