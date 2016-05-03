<?php require_once './common/header.php';?>


	<?php 

		$flag = $_POST['inputflag'];

		if (substr($userID, 0, 4) == "CDKM") {
			$showFlag = 1;	//メンターだったら回答画面を表示させる
		}else{
			$showFlag = 0;	//生徒だったら質問画面を表示させる
		}

		$questionID = $_GET['askID'];

		if ($flag == 1) {
			//DB接続の処理を書く
			$userID = $_SESSION['userID'];
			$name = $userID;
			$content = $_POST['content'];
			$comment = $_POST['comment'];

			require_once '../common/functions.php';

			//すべてのエラーを格納する配列をつくる
			$err = array();

			//名前が入力されているか
			if (empty($content)) {
				$err['content'] = "・質問したい項目をチェックしてください";
			}

			if (empty($comment)) {
				$err['comment'] = "・本文を入力してください";
			}

			if(empty($err)){

				$dbh = dbCon();
				$sql = "INSERT INTO question(userID, category, comment) VALUES (?, ?, ?)";
				$stmt = $dbh->prepare($sql);
				$flag = $stmt->execute(array($name, $content, $comment));

				echo '
					<div id="modal-content">
						<script src="js/modalView/modal.js"></script>
						<p>質問が送信されました。</p><p>回答には時間がかかることがあります。</p><p>回答された時には登録されているメールアドレスにメールが届きます。</p>
						<p><a id="modal-close" class="button-link">閉じる</a></p>
					</div>';

				switch ($content) {
					case 'Scratch':
						$mailAddress = array("kirie0513@gmail.com");
						break;
					
					default:
						$mailAddress = array("kirie0513@gmail.com");
					break;
				}

				
				
				$sql = "SELECT * from question where userID = :id and comment = :comment limit 1";
				$stmt = $dbh -> prepare($sql);
				$stmt->execute(array(":id"=>$userID, ":comment" => $comment));
				$result = $stmt->fetch();


				foreach ($mailAddress as $key => $value) {
					mb_language("Japanese");
					mb_internal_encoding("UTF-8");
					mb_send_mail($value, "【OnlineDojo】新しい質問が届きました", "お疲れ様です。\nOnlineDojoより以下のメッセージが届いています。リンクから質問に回答してください。\n\n===\n{$comment}\n\nhttp://mjk0329.sakura.ne.jp/onlinedojo/content/question.php?askID={$result['id']}", "From: ask@coderdojo-kashiwa.com");
				}

				

			}
		}elseif ($flag == 2) {
			//メンターから送られてきた回答をDBに登録する

			$mentorAnswer = $_POST['mentorAnswer'];

			if (empty($mentorAnswer)) {
				$mError['mentor'] = "質問に回答してから送信してください";
			}

			if (empty($mError)) {
				
				require_once '../common/functions.php';

				$dbh = dbCon();
				$answerFlag = 1;

				$sql = "UPDATE question SET answer = ?, answerFlag = ?, mentorID = ? where id = ?";
  				$stmt = $dbh->prepare($sql);		
				$result = $stmt->execute(array($mentorAnswer, $answerFlag, $userID, $questionID));

				if ($result == true) {

					//ここに質問者へのメールを出す処理を書く

					echo '
					<div id="modal-content">
						<script src="js/modalView/modal.js"></script>
						<p>回答が送信されました。ご協力ありがとうございました。</p>
						<p><a id="modal-close" class="button-link">閉じる</a></p>
					</div>';
					header("Location: ./index.php");
				}

			}


		}

	?>

	<div id="post">
		<img src="./img/img01.png" onclick="goIndex()">

		<?php
			if ($showFlag == 0) {
print<<<EOF

		<div class="posts">
			<h1>もし行き詰まってしまったら…</h1>
			<p>　→　このフォームからメンターに質問することができます</p>
			<br>
		</div>	
	
		<div id="error">
			<p class="error">{$mError['mentor']}</p>
		</div>

		<br>

		<div class="form">
			<form action="" method="post">
				<table border="1">
					<tr><td>名前</td><td>{$userName}</td></tr>
					<tr><td>質問コンテンツ</td><td>	<input type="radio" id="scratch" name="content" value="Scratch">Scratch
													<input type="radio" id="html" name="content" value="HTML/CSS">HTML/CSS 
													<input type="radio" id="other" name="content" value="other">その他
											</td></tr>
					<tr><td>具体的な内容</td><td><textarea name="comment" cols="50" rows="8"></textarea></td></tr>
				</table>

				<input type="hidden" name="inputflag" value="1">
				<br>
				<input type="submit" name="button_submit" value="送信する"><br><br>
			</form>
		</div>

	
EOF;
			}elseif($showFlag == 1){

			require_once '../common/functions.php';

			$dbh = dbCon();

			$sql = "SELECT * from question where id = :askID limit 1";
			$stmt = $dbh -> prepare($sql);
			$stmt->execute(array(":askID"=>$questionID));
			$result = $stmt->fetch();

			$comment = $result['comment'];
			$getUserID = $result['userID'];

			//print($getUserID);

			
			$sql = "SELECT * from userData where userID = :userID limit 1";
			$stmt = $dbh -> prepare($sql);
			$stmt->execute(array(":userID"=>$getUserID));
			$result = $stmt->fetch();

			$askUserName = $result['name'];
			


print<<<EOF

		<div class="posts">
			<h1>子どもたちからの質問にお答えください</h1>
			<br>
		</div>	
	
		<div id="error">
			<p class="error">{$err['content']}</p>
			<p class="error">{$err['comment']}</p>
		</div>

		<br>

		<div class="form">
			<form action="" method="post">
				<table border="1">
					<tr><td>質問者名前</td><td>{$askUserName}</td></tr>
					<tr><td>質問ID</td><td>{$questionID}</td></tr>
					<tr><td>質問内容</td><td>{$comment}</td></tr>
					<tr><td>回答</td><td><textarea name="mentorAnswer" cols="50" rows="8"></textarea></td></tr>
				</table>

				<input type="hidden" name="inputflag" value="2">
				<br>
				<input type="submit" name="button_submit" value="送信する"><br><br>
			</form>
		</div>

EOF;
			}
		?>
		</div>

	<div id="margin">
		<p>Question</p>
	</div>

<?php require_once './common/footer.html'; ?>
