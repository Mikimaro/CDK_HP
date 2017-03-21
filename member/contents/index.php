<?php

    session_start();

    $loginStatus = $_SESSION['loginStatus'];

    if (!$loginStatus) {
        header("Location: ../index.php");
    }else{
        $pageTitle = "さあ、はじめよう";
        require "./header.php";
    }

?>

<div id="main">

    <div id="menu">
        <ul class="menuUl">
            <li class="conMenuL">
                <a href="question.php">
                    <img src="./images/training.png" class="menuImg">
                </a>
                <p class="text">トレーニングシート</p>
            </li>
            
            <li class="conMenuC">
                <a href="./progressCheck.php">
                    <img src="./images/check.png" class="shintyokuImg">
                </a>
                <p class="text">チェックシート</p>
            </li>

            <li class="conMenuR">
                <a href="setting.php">
                    <img src="./images/setting.png" class="menuImg">
                </a>
                <p class="text">設定</p>
            </li>

        </ul>


    </div>
 
</div>


<?php
    require "footer.php";