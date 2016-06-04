<?php
	session_start();
	$flag = $_SESSION['flag'];

	if ($flag == 1) {

		
		
	}else{
		header("Location: index.php");
	}

