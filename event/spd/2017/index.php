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
            <p class="title">ありがとうございました。</p>
            <p class="mainText">
                <!--感謝の言葉が入るぞ-->
            </p>
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="./image/spd2017-01.JPG" class="img-responsive"></li>
                    <li><img src="./image/spd2017-02.JPG" class="img-responsive"></li>
                    <li><img src="./image/spd2017-03.JPG" class="img-responsive"></li>
                    <li><img src="./image/spd2017-04.JPG" class="img-responsive"></li>
                </ul>
            </div>
            <p class="textCenter">Spcial Presentation Day 2017 の様子</p>
        </div>  

        <div id="eventDetail">
            <p class="title">公開中の映像</p>

            <section id="youtubeLive">
                <p class="mainText">
                    当日のすべての様子です。
                </p>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5oaGiTPlUyg" frameborder="0" allowfullscreen></iframe>
                </div>
            </section>

            <section id="youtubeLive">
                <p class="mainText">
                    CoderDojo Kashiwaのドキュメンタリー映像です。
                </p>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hC1NCcYpUFY" frameborder="0" allowfullscreen></iframe>
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