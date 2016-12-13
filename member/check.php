<?php

    require_once "function.php";
    require_once "UserDataClass.php";
    require_once "TrainingSheetClass.php";

    session_start();

    $flag = $_SESSION['flag'];
    $postFlag = $_POST['flag'];

    $userName = $_SESSION['userName'];
    $userId = $_SESSION['userId'];
    $userPassword = $_SESSION['userPassword'];
    $userDojoName = $_SESSION['userDojoName'];
    $userMail = $_SESSION['userMail'];
    $userBirthday = $_SESSION['userBirthday'];

    if($postFlag == 2){
        //登録ボタン押された時の処理
        //セッションに値をいれてログインしてしまう、firstPageに遷移

        //登録する

        $dbh = dbCon();

        $userData = new UserData();
		$latestNumber = $userData->getLatestNumber($userDojoName);
        $newNumber = $latestNumber+1;
    
        $userPassword = sha1($userPassword);
        
        //登録処理
        $sql = "INSERT INTO userData(user_id, user_name, user_mail, user_birthday, user_dojo, user_password, last_update) values (?, ?, ?, ?, ?, ?, now())";
		$stmt = $dbh->prepare($sql);
		$flag = $stmt->execute(array($userId, $userName, $userMail, $userBirthday, $userDojoName, $userPassword)); 
    
        //latestNumber を更新する処理
        $sql = "UPDATE latestNumber SET {$userDojoName} = ?";
  		$stmt = $dbh->prepare($sql);		
		$result = $stmt->execute(array($newNumber));

        //トレーニングシートDBにユーザIdを登録
        $tSManager = new TrainingSheetManager();
        $tester = $tSManager->AddUserId($userId);

        //debug
        /*
		    $latestNumber = $userData->getLatestNumber($userDojoName);
            print($latestNumber);
        */
        header("Location: index.php");

    }else{
        if($flag == 1){
             //メインDojoのリライト

            if($userDojoName == "CDKS"){
                $userDojoName = "CoderDojo Kashiwa";
            }elseif($userDojoName == "CDKH"){
                $userDojoName = "CoderDojo Kashiwa-no-ha";
            }elseif($userDojoName == "CDKN"){
                $userDojoName = "CoderDojo Nagareyama";
            }elseif($userDojoName == "CDOS"){
                $userDojoName = "その他のCoderDojo";
            }elseif($userDojoName == "CDKM"){
                $userDojoName = "メンターとして参加";
            }

            //パスワードを伏せ字にする

            $passwordNumber = strlen($userPassword);
            

            for ($i=0; $i < $passwordNumber; $i++) { 
                $newPassword = $newPassword."*";    
            }

        }else{
            header("Location: index.php");
        }
    }

    require_once "header.php";

?>

<div id="main">
    <h1 class="center">登録内容確認</h1>
    <p class="center">ユーザIDを必ず記憶してください</p>
    <table border="0" class="checkTable">
       
            <?php
                $menuItem = array("ユーザID", "お名前", "パスワード", "生年月日", "メインDojo", "メールアドレス");
                $contentsItem = array($userId, $userName, $newPassword, $userBirthday, $userDojoName, $userMail);
                for ($i=0; $i < 5; $i++) { 
                    print("<tr><td class='tdLeft'>{$menuItem[$i]}</td><td>　{$contentsItem[$i]}</td></tr>");
                }
            ?>
    </table>

    <form action="" method="POST">
        <input type="hidden" value="2" name="flag">
        <input type="submit" value="登録する">
    </form>

</div>

<?php
    require_once "footer.php";


    
	