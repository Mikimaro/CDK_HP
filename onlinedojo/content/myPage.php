<?php require_once './common/header.php'; ?>

	<div id="post">
		<img src="./img/img01.png" onclick="goIndex()">
		<div id="myPage">
			<h1>マイページ</h1>

			<br>
			
			<table border="1">
				<tr><td>名前</td><td><?php print($userName); ?></td></tr>
				<tr><td>ID</td><td><?php print($userID); ?></td></tr>
				<tr><td>所属Dojo</td><td><?php print($dojoName); ?></td></tr>
				<tr><td>メールアドレス</td><td><?php print($userMail);?></td></tr>
			
			</table>

			<br><br>

			<h1>質問一覧</h1>

			<ul>
				<?php
					//過去の質問一覧を取得する
					require_once '../common/functions.php';
					$dbh = dbCon();

					$num = 2;

			        $sql = "SELECT * from question where userID = :userID AND answerFlag = :num";
			        $stmt = $dbh -> prepare($sql);
			        $stmt->execute(array(":userID"=>$userID, ":num"=>$num));
			        $result = $stmt->fetchAll();

			        foreach ($result as $key => $value) {
			        	print("<li>・<a href='showAnswer.php?id={$value['id']}'>質問ID{$value['id']}</a></li>");
			        }

			        /*
			        $sql = "UPDATE training_sheet SET q1 = now() where userID = ?";
  					$stmt = $dbh->prepare($sql);		
					$result = $stmt->execute(array($userID));
					*/
				?>
			</ul>

			<br>

			<h1>トレーニングシート</h1>
			<table border="1" class="trainingSheet">

				<tr>
					<?php
						for ($i=1; $i < 11; $i++) {

							print("<td>Q{$i}</td>");

						}
					?>
				</tr>

				<tr>
					<?php

						$keyValue = array("q1", "q2", "q3", "q4", "q5", "q6", "q7", "q8", "q9", "q10");


						$sql = "SELECT * from training_sheet where userID = :userID";
				        $stmt = $dbh -> prepare($sql);
				        $stmt->execute(array(":userID"=>$userID));
				        $result = $stmt->fetchAll();
				        
				        for ($i=1; $i < 11; $i++) {

				        	if (is_null($result[0][$keyValue[$i-1]])) {
				        	 	print("<td>-</td>");
				        	 }else{	
				        		print("<td>".$result[0][$keyValue[$i-1]]."</td>");
				        	}

				        }
				        
					?>
				</tr>

				<tr>
					<?php

						//表示インデックスを生成
						for ($i=11; $i < 21; $i++) {

							print("<td>Q{$i}</td>");

						}
					?>
				</tr>

				<tr>
					<?php
						//ステータスを表示
						for ($i=11; $i < 21; $i++) {

					        if (is_null($result[0][$keyValue[$i-1]])) {
					         	print("<td>-</td>");
					         }else{	
					        	print("<td>".$result[0][$keyValue[$i-1]]."</td>");
					        }

				        }
					?>	
	

				</tr>
				<tr>
					<?php

						//表示インデックスを生成
						for ($i=21; $i < 31; $i++) {

							print("<td>Q{$i}</td>");

						}
					?>
				</tr>

				<tr>
					<?php
						//ステータスを表示
						for ($i=21; $i < 31; $i++) {

					        if (is_null($result[0][$keyValue[$i-1]])) {
					         	print("<td>-</td>");
					         }else{	
					        	print("<td>".$result[0][$keyValue[$i-1]]."</td>");
					        }

				        }
					?>	
	

				</tr>

			</table>

			<br><br>

		</div>
	</div>

	<div id="margin">
		<p>マイページ</p>

	</div>
<?php require_once './common/footer.html'; ?>