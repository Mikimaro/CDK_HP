<?php

   // require_once "db.php";
    //$dbh = dbCon();

    //$isPost = 

    require_once "header.php";

    $isPost = $_POST['isPost'];

    if($isPost){
        define('PASSWORD', 'kashiwa0505');
        
        $password = $_POST['password'];

        if($password == PASSWORD){
            print("success");
        }
    }

?>

    <div id="main">
        <p class="title">Login</p>
        <form acriont="" method="POST">
            <input type="password" name="password" placeholder="password">
            <input type="hidden" name="isPost" value="true">
            <input type="submit" value="login">
        </form>
    </div>

<?php
    require_once "footer.php";