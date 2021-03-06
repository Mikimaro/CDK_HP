<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>SPD2017</title>
    <link rel="stylesheet" href="./style/style.css" style="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="./script/jquery.min.js"></script>
    <!-- flex slider -->
    <link rel="stylesheet" href="./style/flexslider.css">
    <script src="./script/jquery.flexslider.js"></script>

    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                slideshowSpeed: 4000,
                animationDuration: 650,
                directionNav: false
            });
        });
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta property="og:title" content="SPD2017">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://coderdojo-kashiwa.com/event/spd/2017">
    <meta property="og:image" content="https://coderdojo-kashiwa.com/event/spd/2017/image/ogp.png">
    <meta property="og:site_name" content="SPD2017">
    <meta property="og:description" content="Special Presentation Day 2017は、CoderDojo Kashiwaによる子どもたちのための成果発表会です。">

    <meta property="fb:app_id" content="130507987666059">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:player" content="@CDKashiwa">

    <link rel="shortcut icon" type="image/x-icon" href="./image/favicon.ico">

</head>

<body>
    <div id="header">
    <img src="./image/spd2017logo.png" class="mainLogo">
        <p class="mainSubTitle">Special Presentation Day 2017</p>

            <p class="middleText">2017.12.23 (Sat) 13:00-17:00<br>@麗澤大学生涯教育プラザプラザホール</p>
    </div>

    <div id="main">
    
        <div id="about">
            <p class="title">Special Presentation Day とは？</p>
            <p class="mainText">
                Special Presentation Day とは、CoderDojo Kashiwaが主催する、子どもたちによる成果発表会です。2014年から始まったこのイベントは、今年で4年目を迎えます。<br>
                子どもたちにはただプログラミングをするのではなく、しっかりと自分の言葉で相手に伝える力を身に着けてほしいと思っています。
            </p>
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="./image/spd2016-01.JPG"></li>
                    <li><img src="./image/spd2016-02.JPG"></li>
                    <li><img src="./image/spd2016-03.JPG"></li>
                    <li><img src="./image/spd2016-04.JPG"></li>
                </ul>
            </div>
            <p class="textCenter">Spcial Presentation Day 2016 の様子</p>
        </div>  

        <div id="eventDetail">
            <p class="title">イベント詳細</p>
            <p class="mainText">
                <ul>
                    <li>日時：2017年12月23日（土）13:00 - 17:00</li>
                    <li>場所：麗澤大学生涯教育プラザ プラザホール（JR常磐線各駅停車 南柏駅からバス約4分）</li>
                    <li>定員：100名</li>
                </ul>
            </p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1617.3505186047016!2d139.95571875823669!3d35.831810145039874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018834a0f237363%3A0xa24b8a481485f257!2z44CSMjc3LTAwNjIg5Y2D6JGJ55yM5p-P5biC5YWJ44Kx5LiY5Zuj5Zyw77yRIOeUn-a2r-aVmeiCsuODl-ODqeOCtg!5e0!3m2!1sja!2sjp!4v1510470419876" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            

        </div>

        <!--
        <div id="detail">

            <p class="title">発表者募集</p>

            <p class="mainText">
                発表する子どもたちの募集を開始しています。
            </p>
                
            <p class="mainH3Title">①：対象</p>
                <ul>
                    <li>CoderDojo Kashiwa, Kashiwa-no-ha, Nagareyama, Kashiwa-Shounan, Minami-Kashiwa, Moriya に参加したことのあるNinja。</li>
                    <li>柏市内の小学校に在学しており、今年プログラミングの授業を受けた児童。</li>
                    <li>柏市近辺の小・中学校に在学しており、クラブ等でプログラミングを行っている児童及び生徒。</li>
                </ul>

                <p class="mainH3Title">②：作品発表について</p>
                <ul>
                    <li>Special Presentation Dayは、あなたが頑張ったことを発表する場所です。他の人と比べる必要はまったくありません。</li>
                    <li>作品のフォーマットはなんでも構いません。ScratchやWebページなどに限らず、音楽やデザインなども歓迎です。</li>
                    <li>もし、当日用事があり登壇することができない場合でも、予めビデオを撮影することで発表することができます。その場合は、申込みフォームの備考欄に「ビデオ発表を希望」とご記入ください。</li>
                </ul>

                <p class="mainH3Title">③：発表練習会について</p>
                <ul>
                    <li>今年から当日までに事前発表練習会を行います。もし自信がなくても大丈夫。こちらの会にご参加ください。</li>
                </ul>

            </p>

            
            <a href="https://goo.gl/forms/8z2iFIMYQtsxvRfg1" target="_blank" class="button">発表を申し込む</a>

        </div>
        -->

        <div id="schedule">

            <p class="title">当日スケジュール</p>

            <div class="table-responsive">
                <table class="table table-md table-hover text">
                    <thead>
                        <tr>
                            <th scope="col">時間</th>
                            <th scope="col">内容</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12:30</td>
                            <td>開場</td>
                        </tr>
                        <tr>
                            <td>13:00</td>
                            <td><a data-toggle="collapse" data-parent="#accordion" href="#Opening" aria-expanded="true" aria-controls="collapseOne">オープニングセッション ∨</a></td>
                        </tr>
                        <tr id="Opening" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                            <td colspan="2" class="card-block">
                                CoderDojo Kashiwa のチャンピオンである 宮島衣瑛 からの挨拶
                            </td>
                        </tr>
                        <tr>
                            <td>13:20</td>
                            <td>発表①</td>
                        </tr>
                        <tr>
                            <td>14:00</td>
                            <td>休憩（10分）</td>
                        </tr>
                        <tr>
                            <td>14:10</td>
                            <td>発表②</td>
                        </tr>
                        <tr>
                            <td>15:00</td>
                            <td>休憩（10分）</td>
                        </tr>
                        <tr>
                            <td>15:10</td>
                            <td>発表③</td>
                        </tr>
                        <tr>
                            <td>16:00</td>
                            <td>休憩（10分）</td>
                        </tr>
                        <tr>
                            <td>16:10</td>
                            <td><a data-toggle="collapse" data-parent="#accordion" href="#Closing" aria-expanded="true" aria-controls="collapseOne">クロージングセッション ∨</a></td>
                        </tr>
                        <tr id="Closing" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                            <td colspan="2" class="card-block">
                                CoderDojo Kashiwa の2017年度の活動報告
                            </td>
                        </tr>
                        <tr>
                            <td>17:00</td>
                            <td>閉場</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div id="eventDetail">
            <p class="title">ライブ配信</p>
            <p class="mainText">
                当日はYouTube Liveによるライブ配信を予定しております。遠方の方はこちらからご観覧ください。
            </p>
            <section id="youtubeLive">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/live_stream?channel=UCB2CuGWflVkNSP0FD3E0fEA&autoplay=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </section>
        </div>
        
        <div id="sponsored">
            <p class="title">ご支援</p>
            <p class="mainText">
                Special Presentation Day 2017は以下の企業・団体様のご支援により運営されています。
            </p>
            <table border="0" class="sponcerTable">
                <tr><td class="tdLeft"><a href="http://www.reitaku-u.ac.jp/" class="sponcerLink"><img src="./image/reitaku.png" class="sponcerImage"></a></td><td class="tdRight"><a href="https://innovation-power.xyz" class="sponcerLink"><img src="./image/ip.png" class="sponcerImage"></a></td></tr>
                <tr><td class="tdLeft"><a href="http://www.reitaku-u.ac.jp/" class="sponcerLink">麗澤大学地域連携センター</a></td><td class="tdRight"><a href="https://innovation-power.xyz" class="sponcerLink">Innovation Power Co.,Ltd</a></td></tr>
                <tr><td class="tdLeft">会場提供</td><td class="tdRight"> 運営協力</td></tr>
            </table>  
        </div>

    </div>

    

    <div id="footer">
        <a href="https://coderdojo-kashiwa.com"><img src="./image/dojo_logo_white.png" class="footerImg"></a><br>
        <p class="footerText">Special Presentatation Day 2017.<br>Presented by <a href="https://coderdojo-kashiwa.com" class="footerA">CoderDojo Kashiwa</a>.</p>
    </div>

</body>

</html>