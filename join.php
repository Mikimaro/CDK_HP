<?php	
	require_once 'header.php';
	require_once 'functions.php';

	$dbh = dbCon();

	$id = 1;

	$sql = "SELECT * from webControll where id = 1";
	$stmt = $dbh -> prepare($sql);
	$stmt->execute(array(":id = $id"));
	$result = $stmt->fetchAll();

	$date = $result[0]["nextDojoDate"];
	$times = $result[0]["nextDojoNumber"];

	$firstStatus = $result[0]["firstFormStatus"];
	$repeatorStatus = $result[0]["repeaterFormStatus"];
?>

<div id="container">

	<div class="pageTitle">

		<img src="./image/dojoLogo.png" class="headerLogo">
		<h1 class="headline">
			CoderDojo Kashiwaに参加する
		</h1>

		<p class="headline">
			あたらしい世界への扉を開きましょう
		</p>

		<div id="join">

			<table class="nextDojoTable">
				<tr>
					<th>次回</th>
					<td class="biggerTd"><?php echo("{$date}（#{$times} ）");?></td>
				</tr>

				<tr>
					<th>時間</th>
					<td class="biggerTd">10:00 - 12:00</td>
				</tr>

				<tr>
					<th>持ち物</th>
					<td class="plainTd">
						<ul>
							<li>ノートパソコン（マウスがあると便利）</li>
							<li>筆記用具</li>
						</ul>
					</td>
				</tr>

				<tr>
					<th>参加費</th>
					<td class="plainTd">無料<br>※CoderDojoは完全ボランティアな活動です。皆様からの寄付によって成り立っています。</td>
				</tr>

			</table>

			<table class="nextDojoTable">

				<p class="formTitle">【お申し込み】</p>

				<tr>
					<th>はじめてのかた</th>
					<td class="biggerTd">
						<?php
				if ($firstStatus == 0) {

print<<<EOF
			<a href="firstJoinForm.php" class="formBlockF">申し込みフォームへ</a>
			
EOF;
		}elseif ($firstStatus == 1) {
			print("<p class='red'>1週間前にオープンします</p>");

		}elseif($firstStatus == 2){
			print("<p class='red'>定員に達しました</p>");
		}

		?>

				</td>

				<tr>
					<th>既に来ているかた</th>
					<td class="biggerTd">
					<?php

				if ($repeatorStatus == 0) {
print<<<EOF
			<a href="form.php" class="formBlockM">申し込みフォームへ</a>
			<br>
EOF;
				}elseif ($repeatorStatus == 1) {
					print("<p class='red'>1週間前にオープンします</p>");
				}elseif ($repeatorStatus == 2) {
					print("<p class='red'>定員に達しました</p>");
				}


	?>
					</td>
				</tr>

				

			</table>

	<div id="formSelectButton">

		<table class="nextDojoTable">
			<tr>
				<th>場所</th>
				<td class="plainTd">
					<a href="http://nbob.jp" target="_blank">NoblesseOblige</a>
					<script type="text/javascript">
						egmap_width = "500px";
						egmap_height = "500px";
						egmap_lat = 35.8588348;
						egmap_lng = 139.9756698;
						egmap_zoom = 18;
						egmap_open_info_window_type = 1;
						egmap_wheel_zoom_type = 0;
						egmap_address = "";
						egmap_name = "CoderDojo Kashiwa";
						egmap_tel = "";
						egmap_url = "";
						egmap_email = "";
						egmap_image_url = "";
						egmap_image_layout_type = 1;
					</script>
					
					<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
					<script type="text/javascript" src="http://www.egmap.jp/amc.js" charset="utf-8"></script>
					<p class="egmap_copyright" style="width: 500px;">powered by <a href="http://www.egmap.jp/" target="_blank">egmap.jp</a></p>

				</td>
			</tr>
		</table>

		</div>

	</div>

</div>

<?php
	require_once 'footer.php';
?>
