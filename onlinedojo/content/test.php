<?php
	mb_language("Japanese");
	mb_internal_encoding("UTF-8");
	
	$req_name = htmlspecialchars($_POST["name"], ENT_QUOTES); 
	$req_mail = htmlspecialchars($_POST["mail"], ENT_QUOTES);　
	$req_content = htmlspecialchars($_POST["content"], ENT_QUOTES);　
	$req_comment = htmlspecialchars($_POST["comment"], ENT_QUOTES);　
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Question</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssreset/cssreset-min.css">
</head>

<body>
	<div id="header" class="container">
		<h1>CoderDojo Kashiwa OnlineDojo</h1>
	</div>

	<div id="navi">
		<ul class="menu">
			<li><a href="index.php">Top</a></li>
			<li><a href="study.php">study</a></li>
			<li><a href="question.php">Question</a></li>
			<li><a href="info.php">info</a></li>
		</ul>
	</div>

	<div id="post">
		<img src="../img/img01.png" onclick="goIndex()">
		<div class="posts">
			<h1>質問を受け付けました</h1>
			<p>回答には時間がかかるかもしれません。ご了承ください。</p>
			<br>
		</div>	
			
		<div id="answer">	
			<?php
				print($req_name);
				print($req_mail);
				print($req_content);
				print($req_comment);
			?>
		</div>

	</div>
	
	<div id="footer">
		<p>Copyright 2014 CoderDojo Kashiwa</p>
		<p>Created by Kirie Miyajima</p>
	</div>
</body>
</html>
