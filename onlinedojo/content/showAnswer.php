<?php require_once './common/header.php'; ?>

	<?php
		$inputflag = $_POST['inputflag'];

		$askID = $_GET['id'];

		require_once '../common/functions.php';
		$dbh = dbCon();
		$sql = "SELECT * from question where id = :askID limit 1";
		$stmt = $dbh -> prepare($sql);
		$stmt->execute(array(":askID"=>$askID));
		$result = $stmt->fetch();
	
		$date = $result['askDate'];
		$comment = $result['comment'];
		$answer = $result['answer'];
		$mentorName = returnMentorName($result['mentorID']);

		if ($inputflag == 1) {
			require_once '../common/functions.php';
			$dbh = dbCon();

			$postID = $_POST['postID'];

			$answerFlag = 2;
			$questionID = $postID;

			$sql = "UPDATE question SET answerFlag = ? where id = ?";
  			$stmt = $dbh->prepare($sql);		
			$result = $stmt->execute(array($answerFlag, $postID));

			header("Location: ./index.php");

		}

	?>

	<div id="post">
		<img src="./img/img01.png" onclick="goIndex()">
		<div class="posts">
			<h1>メンターからの回答を確認する</h1>
		</div>
		<br>
		<div class="answer">

			<?php

				



			?>
			
			<table border="1" class="answerTable">
				<tr><td class="tdLeft">質問日時</td><td class="tdRight"><?php print($date);?></td></tr>
				<tr><td class="tdLeft">質問内容</td><td class="tdRight"><?php print($comment);?></td></tr>
				<tr><td class="tdLeft">メンター名</td><td class="tdRight"><?php print($mentorName); ?></td></tr>
				<tr><td class="tdLeft">メンターからの回答</td><td class="tdRight"><?php print($answer);?></td></tr>
			</table>
			<br>
			<form action="" method="POST">
				<input type="hidden" name="inputflag" value="1">
				<input type="hidden" name="postID" value="<?php print($askID);?>">
				<input type="submit" value="既読にする">
			</form>

		</div>

		
	</div>
		<p>回答をみる</p>
	<div id="study">

	</div>

<?php require_once './common/footer.html'; ?>
