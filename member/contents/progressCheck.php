<?php
    $pageTitle = "進捗を確認する";
    require_once "header.php";


?>

<div id="main">
    <div id="progressCheck">
        <?php

            $userId = "CDKS0015";

            $progressManager = new TrainingSheetManager();
            $data = $progressManager->getProgressData($userId);
            
        ?>

        <table border="1">
            <?php
                for ($i=1; $i < 31; $i++) { 
                    print("<tr><td>");
                    print("問題".$i);
                    print("</td><td>");
                    print($data[0]["q{$i}"]);
                    print("</td></tr>");
                } 
            ?>
        </table>

    </div>
</div>