<?php

    require_once "function.php";
    require_once "UserDataClass.php";
    require_once "TrainingSheetClass.php";

    session_start();

    $flag = $_SESSION['flag'];
    $postFlag = $_POST['flag'];

    $userId = $_SESSION['userId'];
    $userName = $_SESSION['userName'];
    $userPassword = $_SESSION['userPassword'];
    $userDojoName = $_SESSION['userDojoName'];
    $userMail = $_SESSION['userMail'];
    $userBirthday = $_SESSION['userBirthday'];

    $dbh = dbCon();

    if($postFlag == 2){
        //登録ボタン押された時の処理
        //セッションに値をいれてログインしてしまう、firstPageに遷移

        //登録する
        $postUserId = $_POST['userId'];
        $postUserName = $_POST['userName'];
        $postUserPassword = $_POST['userPassword'];
        $postUserDojoName = $_POST['userDojoName'];
        $postUserMail = $_POST['userMail'];
        $postUserBirthday = $_POST['userBirthday'];

        $postUserPassword = sha1($postUserPassword);


        // $debugArray = array($postUserId, $postUserName, $postUserMail, $postUserBirthday, $postUserDojoName, $postUserPassword);
        
        // for($i=0; $i<count($debugArray); $i++){
        //     var_dump($debugArray[$i]);
        // }


        
        //登録処理
        $sql = "INSERT INTO userData(user_id, user_name, user_mail, user_birthday, user_dojo, user_password, last_update) values (?, ?, ?, ?, ?, ?, now())";
		$stmt = $dbh->prepare($sql);
		$flag = $stmt->execute(array($postUserId, $postUserName, $postUserMail, $postUserBirthday, $postUserDojoName, $postUserPassword)); 
 
        //トレーニングシートDBにユーザIdを登録
        $tSManager = new TrainingSheetManager();
        $tester = $tSManager->AddUserId($postUserId, $dbh);

        header("Location: index.php");
        

    }else{
        if($flag == 1){
            //latestNumberを取得
            require_once 'UserDataClass.php';
            $userDataManager = new UserData();
            $number = $userDataManager->getLatestNumber($userDojoName, $dbh);
            $number+=1;

            //latestNumberを書き換えてしまう。
            $userDataManager->updateLatestNumber($userDojoName, $number, $dbh);


            $numberLength = strlen($number);	

            //0を追加する処理
            if($numberLength == 1){
                $userId = $userDojoName."000".$number;
            }elseif($numberLength ==2){
                $userId = $userDojoName."00".$number;
            }elseif($numberLength == 3){
                $userId = $userDojoName."0".$number;
            }elseif($numberLength == 4){
                $userId = $userDojoName.$number;
            }

            $_SESSION['useId'] = $userId;

          
             //メインDojoのリライト

            if($userDojoName == "CDKS"){
                $userDojoId = "CoderDojo Kashiwa";
            }elseif($userDojoName == "CDKH"){
                $userDojoId = "CoderDojo Kashiwa-no-ha";
            }elseif($userDojoName == "CDNS"){
                $userDojoId = "CoderDojo Nagareyama";
            }elseif($userDojoName == "CDOS"){
                $userDojoId = "その他のCoderDojo";
            }elseif($userDojoName == "CDKM"){
                $userDojoId = "メンターとして参加";
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
                $contentsItem = array($userId, $userName, $newPassword, $userBirthday, $userDojoId, $userMail);
                for ($i=0; $i < 5; $i++) { 
                    print("<tr><td class='tdLeft'>{$menuItem[$i]}</td><td>　{$contentsItem[$i]}</td></tr>");
                }
            ?>
    </table>

    <form action="" method="POST">

        <?php
            $debugArray = array($userId, $userName, $userMail, $userBirthday, $userDojoName, $userPassword);
            $postNames = array("userId", "userName", "userMail", "userBirthday", "userDojoName", "userPassword");
            for ($i=0; $i < count($debugArray); $i++) { 
                print("<input type='hidden' value='{$debugArray[$i]}' name='{$postNames[$i]}'>");
            }
        ?>

        <input type="hidden" value="2" name="flag">
        <input type="submit" value="登録する">
    </form>

</div>

<?php
    require_once "footer.php";


    
	