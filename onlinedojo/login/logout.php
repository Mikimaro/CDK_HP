<?php
	session_start();
  	unset($_SESSION['userName']); 
  	unset($_SESSION['status']);
  	header("Location: ../index.php");