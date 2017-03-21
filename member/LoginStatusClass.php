<?php

/**
 * Login statusを管理するクラス
 */
class LoginStatus{
    
    function isLogined(){
        session_start();

        $loginStatus = $_SESSION['loginStatus'];
    
        if($loginStatus){
            return true;
        }else{
            return false;
        }

    }

    function getPlan($userId){
        $userPlan = substr($userId, 0, 4);
        return $userPlan;
    }

}
