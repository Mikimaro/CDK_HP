<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="CoderDojo Kashiwaは子どものためのプログラミング道場です。千葉県柏市で4つの道場を開いています。">
	<meta name="keywords" content="CoderDojo,CoderDojo Kashiwa,こーだーどーじょー,千葉,柏,プログラミング教室,小学生,中学生,プログラミング">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/flexslider.css">
	<link rel="stylesheet" type="text/css" href="style/formStyle.css">
	<link rel="stylesheet" type="text/css" href="style/modal.css">
    <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./image/favicon.ico">
	<script src="./script/jquery.flexslider.js"></script>
	<script>
	     $(function(){
        // 「.modal-open」をクリック
        $('.modal-open').click(function(){
        // オーバーレイ用の要素を追加
        $('body').append('<div class="modal-overlay"></div>');
        // オーバーレイをフェードイン
        $('.modal-overlay').fadeIn('slow');

        // モーダルコンテンツのIDを取得
        var modal = '#' + $(this).attr('data-target');  
        // モーダルコンテンツの表示位置を設定
        modalResize();
         // モーダルコンテンツフェードイン
        $(modal).fadeIn('slow');

        // 「.modal-overlay」あるいは「.modal-close」をクリック
        $('.modal-overlay, .modal-close').off().click(function(){
            // モーダルコンテンツとオーバーレイをフェードアウト
            $(modal).fadeOut('slow');
            $('.modal-overlay').fadeOut('slow',function(){
                // オーバーレイを削除
                $('.modal-overlay').remove();
            });
        });

        // リサイズしたら表示位置を再取得
        $(window).on('resize', function(){
            modalResize();
        });

        // モーダルコンテンツの表示位置を設定する関数
        function modalResize(){
            // ウィンドウの横幅、高さを取得
            var w = $(window).width();
            var h = $(window).height();

            // モーダルコンテンツの表示位置を取得
            var x = (w - $(modal).outerWidth(true)) / 2;
            var y = (h - $(modal).outerHeight(true)) / 2;

            // モーダルコンテンツの表示位置を設定
            $(modal).css({'left': x + 'px','top': y + 'px'});
        }

    });
});
</script>


	<script>
		$(window).load(function() {
			$('.flexslider').flexslider({
        animation: "fade",
				slideshowSpeed: 5000,
				animationSpeed: 2000,
                smoothHeight: true,
				});
		});
	</script>

    <script>
        $(function(){
            $('a[href^="#"]').on('click', function(){
                var speed = 400;
                var href= $(this).attr('href');
                var target = $(href == '#' || href == '' ? 'html' : href);
                var position = target.offset().top;
                $('body,html').animate({scrollTop:position}, speed, 'swing');
                return false;
            });
        });
    </script>


	<script language="javascript" type="text/javascript">

 	function Display(no){
  
     	if(no == "no1"){
  
        	 document.getElementById("studentMentor-list").style.display = "block";
        	 document.getElementById("adultMentor-list").style.display = "none";
  
     	}else if(no == "no2"){
  
         	document.getElementById("studentMentor-list").style.display = "none";
         	document.getElementById("adultMentor-list").style.display = "block";
  
     	}
  
	 }

	 </script>

     <!-- OGP settings -->
    <meta property="og:title" content="CoderDojo Kashiwa">
    <meta property="og:type" content="article">
    <meta property="og:url" content="http://coderdojo-kashiwa.com">
    <meta property="og:image" content="http://coderdojo-kashiwa.com/image/ogp.png">
    <meta property="og:site_name"  content="CoderDojo Kashiwa">
    <meta property="og:description" content="小中学生向けのプログラミング道場、CoderDojo Kashiwaの公式サイトです。">
        
    <meta property="fb:app_id" content="947779285308203">
    <meta property="article:publisher" content="https://www.facebook.com/CoderDojokashiwa/">
        
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@C_D_Kashiwa" />



	<title>CoderDojo Kashiwa</title>

</head>

<body>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



	<div id="menu">
		<ul>
			<li><a href="./index.php"><img src="./image/dojoLogo.png" class="homeLogo"></a></li>
			<li><a href="./about.php">ミッション</a></li>
			<li><a href="./dojo/index.php">近くのDojo</a></li>
			<li><a href="./join.php">参加する</a></li>
			<li><a href="./rtd.php">RTDとは</a></li>	
			<li><a href="./mentor.php">メンター</a></li>
			<li><a href="./event.php">イベント</a></li>
		</ul>
	</div>

