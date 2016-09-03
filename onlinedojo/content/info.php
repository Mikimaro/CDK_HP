<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>info</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssreset/cssreset-min.css">
	<style type="text/css">
		.sentaku{ 
			background-color: red;
		}
		.sentaku > a {
			color: white;
		}
	</style>
</head>

<body>
	<?php require_once './common/header.php'; ?>

	<div id="post">
		<img src="./img/img01.png" onclick="goIndex()">
		<div class="posts">
			<h1>Information</h1>
		</div>
		<br>
		<div class="info">
			<a href="http://www.facebook.com/CoderDojokashiwa">・Facebookページ</a>
			<br>
			<a href="https://twitter.com/C_D_Kashiwa">・Twitterアカウント</a>
			<br>
			<a href="http://www.coderdojo-kashiwa.com"> ・CoderDojo Kashiwaホームページ</a>
		</div>
	</div>
	<div id="margin">
		<p>Info</p>
	</div>
	<?php require_once './common/footer.html'; ?>