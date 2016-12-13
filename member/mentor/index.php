<?php

    session_start();

    $loginStatus = $_SESSION['flag'];

    if(!$loginStatus){
        header("Location: ../index.php");
    }else{
        $pageTitle = "メンター用ページ";
        require_once "header.php";
    }