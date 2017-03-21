<?php
    /* debug file */
    

    require "function.php";
    require "UserDataClass.php";
    require "LoginClass.php";
    require "LoginStatusClass.php";
    require "TrainingSheetClass.php";

    $dbh = dbCon();



    $userDojoName = "CDKS";
    $userDataManager = new UserData();

    $number = $userDataManager->getLatestNumber($userDojoName, $dbh);
    $number+=1;
    var_dump($number);
    $userDataManager->updateLatestNumber($userDojoName, $number, $dbh);

    print("loaded");