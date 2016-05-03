<?php
	function dbCon() {

        //本番環境

		$dsn = 'mysql:dbname=mjk0329_onlinedojo;host=mysql481.db.sakura.ne.jp';
    	$user = 'mjk0329';
    	$password = 'mjk-10510179';

        //テスト環境

        /*
		$dsn = 'mysql:dbname=onlinedojo;host=localhost';
        $user = 'root';
    	$password = 'root';

        */
    	$connOpt = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

 		// DBサーバーへコネクト
    	$dbh = new PDO($dsn, $user, $password, $connOpt);
    	return $dbh;
	}

    function returnMentorName($mentorUserID){

        $dbh = dbCon();
        $sql = "SELECT * from mentorData where userID = :userID limit 1";
        $stmt = $dbh -> prepare($sql);
        $stmt->execute(array(":userID"=>$mentorUserID));
        $result = $stmt->fetch();

        return $result['name'];

    }

    function returnStudentName($studentID){

        $dbh = dbCon();
        $sql = "SELECT * from userData where userID = :userID limit 1";
        $stmt = $dbh -> prepare($sql);
        $stmt->execute(array(":userID"=>$studentID));
        $result = $stmt->fetch();

        return $result['name'];

    }



    function joinDojoCon(){

        //本番環境

        //$dsn = 'mysql:dbname=mjk0329_coderdojo;host=mysql481.db.sakura.ne.jp';
        //$user = 'mjk0329';
        //$password = 'mjk-10510179';

        //テスト環境（Localhost）

        $dsn = 'mysql:dbname=onlinedojo;host=localhost';
        $user = 'root';
        $password = 'root';

        $connOpt = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

        // DBサーバーへコネクト
        $dbh = new PDO($dsn, $user, $password, $connOpt);
        return $dbh;
    }
    

    function loginStatus(){
        if ($_SESSION['status'] == true) {
            return $loginStatus;
         }else{
            return $loginStatus;
         }
    }

    function h($s){
        return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
    }

    function getPass(){
        
    }

    function emailExists($email, $dbh){
        $sql = "SELECT * FROM userData where mail = :mail limit 1";
        $stmt = $dbh -> prepare($sql);
        $stmt -> execute(array(":mail" => $mail));
        $user = $stmt->fetch();
        return $user ? true : false;
    }

    function getSha1Password($s){
        return (sha1(PASSWORD_KEY.$s));
    }
    