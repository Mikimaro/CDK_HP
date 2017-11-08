<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="CoderDojo,CoderDojo Kashiwa,こーだーどーじょー,千葉,柏,プログラミング教室,小学生,中学生,プログラミング">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/flexslider.css">
	<link rel="stylesheet" type="text/css" href="../style/formStyle.css">
	<link rel="stylesheet" type="text/css" href="s../tyle/modal.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="../script/jquery.flexslider.js"></script>
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


	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			$('.flexslider').flexslider({
        animation: "slide",
				slideshowSpeed: 4500,
				animationSpeed: 1000,
        directionNav: false,
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


	<title>CoderDojo Kashiwa</title>

  <style type="text/css">
    .spd2016{
      width: auto;
      height: 500px;
      margin: 0 auto;
      display: block;
    }
  </style>

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
			<li><a href="../index.php"><img src="../image/dojoLogo.png" class="homeLogo"></a></li>
			<li><a href="../about.php">CoderDojoとは</a></li>
			<li><a href="../kashiwaDojo.php">柏の取り組み</a></li>
			<li><a href="../kashiwanoha.php">柏の葉Dojo</a></li>
			<li><a href="../join.php">参加する</a></li>	
			<li><a href="../mentor.php">メンター</a></li>
			<li><a href="./">イベント</a></li>
		</ul>
	</div>

