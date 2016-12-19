<?php
    $pageTitle = "進捗を追加する";
    require_once "header.php";
    require_once "../function.php";


    $flag = $_POST['flag'];

    if($flag == 1){
        $progressManager = new ProgressManager();

        $userId = $_POST['userId'];
        $quesionId = $_POST['questionNumber'];

        $dbh = dbCon();

        $successFlag = $progressManager->addProgress($userId, $quesionId, $dbh);

        if($successFlag){
            $message = array();
            $message['success'] = "新規進捗を追加しました。";
        }

    }

?>

<div id="main">
    <div id="addProgress">
        <p class="message"><?php echo($message["success"]); ?></p>
        <form action="" method="POST">
            <p class="center">生徒のID</p>
            <input type="text" name="userId" class="textbox" placeholder="生徒のId">
            <br>
            <select name="questionNumber">
                <?php
                    for ($i=1; $i < 31; $i++) { 
                        echo("<option value='q".$i."'>問題".$i."</option>");
                    }
                ?>
            </select>
            <br>
            <input type="hidden" name="flag" value="1">
            <input type="submit" value="登録">
        </form>
    </div>
</div>