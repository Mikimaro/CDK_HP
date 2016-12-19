<?php
    require_once "ProgressManagerClass.php";
    require_once "../function.php";
   
    $pageTitle = "進捗を取り消す";
    require_once "header.php";

    $flag = $_POST['flag'];

    if($flag == 1){

        $userId = $_POST['userId'];
        $questionNumber = $_POST['questionNumber'];

        $dbh = dbCon();

        $progressManager = new ProgressManager();
        $progressFlag = $progressManager->removeProgress($userId, $questionId, $dbh);

        if($progressFlag){
            print("<script language=javascript>showWindon();</script>");
        }

    }

    
    
?>



<div id="main">
    <div id="removeProgress">
        <p class="title">進捗を取り消す</p>

        <form action="" method="POST">
            <p class="center">生徒のID</p>
            <input type="text" name="userId" class="textbox" placeholder="生徒のID">
            <br>
            <p class="center">取り消す問題番号を選択</p>

            <select name="questionNumber">
                <?php
                    for ($i=1; $i < 31; $i++) { 
                        echo("<option value='q".$i."'>問題".$i."</option>");
                    }
                ?>
            </select>
            <br>
            <input type="hidden" name="flag" value="1">
            <input type="submit" value="編集する">
        </form>

    </div>

    <div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking:false">
        <button data-remodal-action="close" class="remodal-close"></button>
        <h1>タイトル</h1>
        <p>コンテンツを記述します。</p>
        <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
        <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
    </div>
</div>