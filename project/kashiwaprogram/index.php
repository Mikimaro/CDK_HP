<?php
    require_once "header.php";

    $newsTitle = array(
        "ベネッセ、柏市内小学校でプログラミング教育の共同研究授業を開始",
        "柏市が市内全小学校でプログラミング授業を始められた理由",
        "柏市教職員夏季情報活用研修講座　取材レポート",
        "小学生がプログラミング挑戦　柏で先行授業　ネコ動かし「面白い」",
    );
    $newsLink = array(
        "http://ict-enews.net/2017/10/18benesse-7/",
        "http://ict-enews.net/zoomin/kashiwa/",
        "http://berd.benesse.jp/special/manabi/manabi_11.php",
        "http://www.sankei.com/region/news/161012/rgn1610120026-n1.html"
    );

    $newsDate = array(
        "2017年10月18日",
        "2017年06月20日",
        "2016年10月18日",
        "2016年10月12日"
    );

    $newsCompany = array(
        "ICT教育ニュース",
        "ICT教育ニュース",
        "ベネッセ教育総合研究所",
        "日本経済新聞"
    );

?>



<div id="container">
    <div id="kashiwaprogram">
        <div id="titleHeader">
           <img src="./image/header.png" class="kpHeaderImaegView">
           <h1 class="kpHeaderTitleLabel">柏市とCoderDojo Kashiwaの取り組み</h1>
           <p class="kpHeaderTextLabel">
               柏市では2017年度より全国に先駆けてプログラミングを使った学習を市内にある42校すべての小学校4年生を対象にスタートさせました。
               CoderDojo Kashiwaはカリキュラム開発・教職員研修等様々な場面で協力しています。<br>
               ここでは、私たちの取り組みの一部をご紹介します。
        </div>

        <div id="kpMenu">
            <ul>
                <a href="#kpProject"><li>柏市の取り組み</li></a>
                <a href="#kpCurriculum"><li>カリキュラム</li></a>
                <a href="#kpEvent"><li>イベント</li></a>
                <a href="#kpNews"><li>ニュース</li></a>
            </ul>
        </div>  

        <div id="main">
            <div id="kpMain">
                <div id="kpProject">
                    <h1 class="kpTitle">柏市の取り組み</h1>
                    <p class="text">
                        千葉県柏市は2017年度より市内にある42校すべての公立小学校で、Scratchを使ったプログラミング教育をスタートしました。柏市が目指しているプログラミング教育とは、    
                    </p>   
                    <ul>
                        <li>知識・技能の習得</li>
                        <li>思考力・判断力・表現力の育成</li>
                        <li>学びに向かう力・人間性の涵養</li>
                    </ul>
                    <p class="text">
                        であり、あくまでもプログラミング作成技術ではなくプログラミング的思考を育てることを目的としています。
                    </p>
                </div>

                <div id="kpCurriculum">
                    <h1 class="kpTitle">カリキュラム</h1>
                    <P class="text">
                        柏市では、実際に使っている指導案やワークシートを以下のサイトですべて公開しています。
                    </p>
                    <a href="http://www.it.kashiwa.ed.jp/?page_id=136">http://www.it.kashiwa.ed.jp/?page_id=136</a>
                </div>

                <div id="kpEvent">
                    <h1 class="kpTitle">イベント</h1>
                    <p class="kpSubTitle">①：ScratchDay in Kashiwa</p>

                    <div id="aboutImageArea">
                        <div class="flexslider">
                            <ul class="slides">
                                <li><img src="./image/sdk01.JPG" class="dojoDetailImage"></li>
                                <li><img src="./image/sdk02.jpg" class="dojoDetailImage"></li>
                            </ul>
                        </div>
                    </div>

                    <p class="text">
                        ScratchDay 2017 in Kashiwa は、ScratchDay in Kashiwa 実行委員会と柏市教育委員会の共催で開催しています。また、セッションでは実行委員長かつCoderDojo Kashiwa Championの宮島と、柏市教育委員会学校教育課副参事の佐和伸明さんのクロストークも行いました。<br>
                        クロストークでは柏市のプログラミング教育について、CoderDojoができること・やっていることと、柏市教育委員会ができること・やっていることについてや、柏市のプログラミング教育はどういう方向にいくのかについてお話ししました。
                    </p>

                    <p class="text">参考リンク：<a href="http://scratchday-kashiwa.org">ScratchDay in Kashiwa</a></p>


                    <p class="kpSubTitle">②：かしわプログラミングフェスタ</p>

                    <div id="aboutImageArea">
                        <div class="flexslider">
                            <ul class="slides">
                                <li><img src="./image/fes01.JPG" class="dojoDetailImage"></li>
                                <li><img src="./image/fes02.JPG" class="dojoDetailImage"></li>
                            </ul>
                        </div>
                    </div>

                    <p class="text">
                        2017年8月に行われた「かしわプログラミングフェスタ」は、柏市教育委員会が主催した小学生を対象とするプログラミング体験イベントです。CoderDojo Kashiwaはワークショップを担当しました。教育委員会がこのようなイベントを主催するのはあまり例がありません。
                    </p>


                </div>

                <div id="kpNews">
                    <h1 class="kpTitle">ニュース</h1>

                    <?php
                        for($i=0; $i<count($newsTitle); $i++){
                            print("<p class='kpNewsDate'>{$newsDate[$i]} / {$newsCompany[$i]}</p>");
                            print("<p class='kpNewsTitle'><a href='{$newsLink[$i]}'>{$newsTitle[$i]}</a></p>");
                            print("<hr>");
                        }
                    ?>

                </div>

                    <br><br>

            </div>
        </div>


    </div>

    <br>
</div>

<?php
    require_once "footer.php";
    
