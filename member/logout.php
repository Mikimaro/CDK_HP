<?php
    //log out
    session_start();
    unset($_SESSION['userId']);
    unset($_SESSION['userName']);
    unset($_SESSION['loginStatus']);
    header("Location: ./index.php");