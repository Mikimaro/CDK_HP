<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>nebuta</title>
    <?php wp_deregister_script('jquery'); ?> 
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery-2.1.3.min.js"></script>
    <meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    
 <script>
$(function(){
    $("a[href^='http://']").attr("target","_blank");
        $(".nebuta_btn").click(function(){
        $(".nebuta-about").slideToggle("slow");
      });

        $(".news_btn").click(function(){
        $(".nebuta-about").slideToggle("slow");
      });

        $("q_and_a_btn").click(function(){
        $(".nebuta-about").slideToggle("slow");
      });

        $("entry_haneto_btn").click(function(){
        $(".nebuta-about").slideToggle("slow");
      });

        $(".entry_nebutakai_btn").click(function(){
        $(".nebuta-about").slideToggle("slow");  });

        $(".inquiry").click(function(){
        $(".nebuta-about").slideToggle("slow");  });

        $(".question").click(function(){
        $(".nebuta-about").slideToggle("slow");  });
    });
</script>
</head>
<body>
    <div class="slide">
        <ul class="top-slide">
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
        </ul>
    </div>
    <div class="btn">
        <a href=""><img class=""　src=""></a>
        <img class="n_title" src="<?php bloginfo('template_url'); ?>/images/title.png">
        <a><img class="nebuta_btn" src="<?php bloginfo('template_url'); ?>//images/ nebuta_btn.png"></a>
        <a><img class="news_btn" src="<?php bloginfo('template_url'); ?>//images/ news_btn.png"></a>
        <a><img class="q_and_a_btn" src="<?php bloginfo('template_url'); ?>//images/q_and_a_btn.png"></a>
        <a><img class="entry_haneto_btn" src="<?php bloginfo('template_url'); ?>//images/entry_haneto_btn.png"></a>
        <a><img class="entry_nebutakai_btn" src="<?php bloginfo('template_url'); ?>//images/entry_nebutakai_btn.png"></a>
    </div>

        <div class="nebuta-about">
            <iframe src="<?php bloginfo('template_url'); ?>/iframe/about_Nebutakai.html" width="1000" frameborder="0"></iframe>
        </div>
<!--        
        <div class="news">
            <iframe src="<?php bloginfo("template_url"); ?>/iframe/news.html">
        </div>

        <div class="q_and_a_">
            <iframe src="<?php bloginfo("template_url"); ?>/iframe/q_and_a.html">
        </div>

        <div class="entry_haneto">
            <iframe src="<?php bloginfo("template_url"); ?>/iframe/news.html">
        </div>

        <div class="entry_nebutakai">
            <iframe src="<?php bloginfo("template_url"); ?>/iframe/news.html">
        </div>
-->
    <div class="footer">
        <ul>
            <li><a href="" class="inquiry">お問い合わせ</a></li>
            <li><a href="" class="question">プライバシーポリシー</a></li>
        </ul>
        <p><br>Copyright　柏ねぶた運行委員会</p>
    </div>

</body>
</html>