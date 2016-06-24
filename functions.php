<?php
	function dbCon() {
		$dsn = 'mysql:dbname=mjk0329_coderdojo;host=mysql481.db.sakura.ne.jp';
    	$user = 'mjk0329';
    	$password = 'mjk-10510179';

		//$dsn = 'mysql:dbname=onlinedojo;host=127.0.0.1';
    	//$user = 'root';
    	//$password = 'password';

    	$connOpt = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

 		// DBサーバーへコネクト
    	$dbh = new PDO($dsn, $user, $password, $connOpt);
    	return $dbh;
	}