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
                    <img src="./images/question.png" class="menuImg">
                </a>
            </li>
            <li class="conMenuR"><a href="./progressCheck.php">トレーニングシートの進捗を見る</a></li>
        </ul>
    </div>

</div>


    