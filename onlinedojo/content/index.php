<?php require_once './common/header.php'; ?>

		<div id="left-line">
			<p> </p>
		</div>

		<div id="post">
			<img src="./img/img01.png" onclick="goIndex()">
			<div class="posts">
				<h1>CoderDojo Kashiwa 自宅学習支援プロジェクト</h1>
				<?php
					if ($showFlag == 1) {
						print("<h1>メンター用アカウント</h1>");
					}else{
						print("<h1>生徒用アカウント</h1>");
					}
				?>
				<p>こんにちは、<?php echo $userName; ?>さん！</p>

				<?php 

					require_once '../common/functions.php';

					$dbh = dbCon();

					$flagNum = 1;

					$sql = "SELECT id, comment from question where userID = :userID and answerFlag = :flag";
					$stmt = $dbh -> prepare($sql);
					$stmt->execute(array(":userID"=>$userID, ":flag" => $flagNum));
					$result = $stmt->fetch();

					if (!empty($result['comment'])) {
						print("<p class='alert'>【新規回答】</p>");

						
						print("<tr><td>");
						print("<a href='showAnswer.php?id={$result['id']}' target='_blank'><td>質問ID{$result['id']}への回答があります。</a></td>");
						print("</tr>");
					

					}

					

					


				?>

				<br>

				<br>
				<p>【更新情報】</p>
				<table border="0" class="notification">
					<tr><td class="tableDate">2016/01/01</td><td class="tableCont"><a href="./php.php">PHPの学習コンテンツ</a>を追加しました。</td></tr>
					<tr><td class="tableDate">2016/01/01</td><td class="tableCont">OnlineDojoVer2.0を<a href="./releaceNote.php">リリース</a>しました。</td></tr>
					<tr><td class="tableDate">2015/03/12</td><td class="tableCont"><a href="studyContent/html/html_text.pdf">HTMLのテキストの配信をスタートしました</a></td></tr>
					<tr><td class="tableDate">2015/03/11</td><td class="tableCont">HTMLの学習コンテンツの配信をスタートしました</td></tr>
					<tr><td class="tableDate">2015/01/01</td><td class="tableCont">OnlineDojoをスタートしました</td></tr>
				</table>

				<br><br>

				<div id="notification">
					<p>【CoderDojo Kashiwaからのお知らせ】</p>

					<table border="0" class="notification">
						<tr><td class="tableDate">2016/01/01</td><td class="tableCont">2016年度初回のDojoは1/10です。</td></tr>
						<tr><td class="tableDate">2015/12/20</td><td class="tableCont">今日は<a href="http://coderdojo-kashiwa.com/event/spd/2015">Special Presentation Day 2015</a>です。</tr>
						<tr><td class="tableDate">2015/03/08</td><td class="tableCont">第33回の参加申し込みページを更新しました</td></tr>
						<tr><td class="tabledate">2015/01/13</td><td class="tableCont"><a href="studyContent/CoderDojoKashiwa2015.pdf">2015年上半期のスケジュール表を配布します。このコメントをクリック。</a></td></tr>
						<tr><td class="tableDate">2015/01/01</td><td class="tableCont">次回のDojoは、1月11日（日）です</td></tr>
					</table>
				</div>
			</div>
		</div>

		<div id="margin">
			<p>TOP</p>
		</div>
<?php require_once './common/footer.html'; ?>

