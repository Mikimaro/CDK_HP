<?php require_once './common/header.php'; ?>
	
	<script type="text/javascript">
	$(function(){

		//モーダルウィンドウを出現させるクリックイベント
		$("#modal-open").click(function(){

		//オーバーレイを出現させる
   		$("body").append('<div id="modal-overlay"></div>');
   		$("#modal-overlay").fadeIn("slow");

	   //コンテンツをセンタリングする
   		centeringModalSyncer();

   		//コンテンツをフェードインする
   		$("#modal-content").fadeIn("slow");

   		//[#modal-overlay]、または[#modal-close]をクリックしたら…
   		$("#modal-overlay,#modal-close").unbind().click(function(){

    	//[#modal-content]と[#modal-overlay]をフェードアウトした後に…
      	$("#modal-content,#modal-overlay").fadeOut("slow",function(){

         	//[#modal-overlay]を削除する
         	$('#modal-overlay').remove();

      		});
		});
	});

	//リサイズされたら、センタリングをする関数[centeringModalSyncer()]を実行する
	$(window).resize(centeringModalSyncer);

	//センタリングを実行する関数
	function centeringModalSyncer(){

  	 //画面(ウィンドウ)の幅、高さを取得
  	 var w = $(window).width();
  	 var h = $(window).height();

  	 //コンテンツ(#modal-content)の幅、高さを取得
  	 var cw = $("#modal-content").outerWidth({margin:true});
  	 var ch = $("#modal-content").outerHeight({margin:true});

  	 //センタリングを実行する
   $("#modal-content").css({"left": ((w - cw)/2) + "px","top": ((h - ch)/2) + "px"})

}

});
	</script>


	<div id="post">
		<img src="./img/img01.png" onclick="goIndex()">
		<div id="discuss">
			<h1>DisucussionBoard</h1>
		</div>

		<div id="bbs">
			<?php

				function h($s)
				{
					return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
				}

				$dataFile = "./dat/bbs.dat";

				if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['message'])) {
					
					$message = trim($_POST['message']);

					if ($message !== '') {

						$message = str_replace(array("\t", "\r\n", "\r", "\n"), ' ', $message);
						$user = str_replace(array("\t", "\r\n", "\r", "\n"), ' ', $userName);

						$postedAt = date('m/d H:i:s');

						$newData = $userName."\t".$message."\t".$postedAt."\n";
						$fp = fopen($dataFile, 'a');
						fwrite($fp, $newData);
						fclose($fp);
					}else{
						$err = "メッセージが入力されていません";
					}					
				}

				$posts = file($dataFile, FILE_IGNORE_NEW_LINES);

				$posts = array_reverse($posts);

			?>

			<br>
				<p class="error"><?php print($err); ?></p>
			<br>
			<h2>投稿一覧（<?php echo count($posts); ?>件）</h2>
			<br>
			<table border="1" class="bbsTable">
			<?php
				if (count($posts)) {
					foreach ($posts as $post) {
						list($postedAt, $user, $message) = explode("\t", $post);
						print("<tr><td class='bbsName'>{$postedAt}</td><td class='bbsCon'>{$user}</td><td class='bbsDate'>{$message}</td></tr>");
					}
				}else{
					print("<p>まだ投稿はありません</p>");
				}
			?>
        	</table>
		</div>
		<br><br>

		<p><a id="modal-open" class="button-link">投稿する</a></p>



		<div id="modal-content">
			<p>新しいコメントをする</p>
			<form action="" method="POST">
				<textarea name="message" rows="4" cols="60" wrap="soft"></textarea>
				<br>
				<input type="hidden" name="inputflag" value="1">
				<input type="submit" name="投稿">
				<br>
				<p><a id="modal-close" class="button-link">閉じる</a></p>
			</form>
		</div>

	</div>

	<div id="margin">
		<p>Discussion</p>
	</div>

<?php require_once './common/footer.html'; ?>