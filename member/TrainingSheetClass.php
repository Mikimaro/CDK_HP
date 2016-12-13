<?php

    /**
     * トレーニングシート周りのクラスです。
     */
    class TrainingSheetManager{

        public function AddUserId($userId){        
            
            require_once "function.php";
            $dbh = dbCon();

            $sql = "INSERT INTO training_sheet(user_id) VALUES (?)";
		    $stmt = $dbh->prepare($sql);
		    $flag = $stmt->execute(array($userId));

            return true;


        }

        public function getProgressData($userId){
            require_once "function.php";
            $dbh = dbCon();

            $sql = "SELECT * from training_sheet where user_id = ?";
            $stmt = $dbh -> prepare($sql);
            $stmt->execute(array($userId));
            $result = $stmt->fetchAll();            

            return $result;

        }

    }