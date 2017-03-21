<?php
    $pageTitle = "進捗を追加する";
    require_once "../function.php";
    require_once "ProgressManagerClass.php";


    $flag = $_POST['flag'];

    if($flag == 1){
        $progressManager = new ProgressManager();

        $userId = $_POST['userId'];
        $questionId = $_POST['questionNumber'];

        $dbh = dbCon();

        $successFlag = $progressManager->addProgress($userId, $questionId, $dbh);

        if($successFlag){
            header("Location: ./index.php");
        }

    }

    require_once "header.php";


?>

<div id="main">
    <div id="addProgress">

        <img src="./images/add.png" class="topLogo">

        <p class="message"><?php echo($message["success"]); ?></p>
        <form action="" method="POST">
            <p class="center">進捗を追加する</p>
            <input type="text" name="userId" class="textbox" placeholder="生徒のId" required>
            <br>
            <select name="questionNumber">
                <?php
                    for ($i=1; $i < 31; $i++) { 
                        echo("<option value='q".$i."'>問題".$i."</option>");
                    }
                ?>
            </select>
            <br><br>
            <input type="hidden" name="flag" value="1">
            <input type="submit" value="登録" class="submit">
        </form>
    </div>
</div>